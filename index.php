<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.rawgit.com/konvajs/konva/1.4.0/konva.min.js"></script>
  <meta charset="utf-8">
  <title>Pointing site</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #192731;
    }
    .konvajs-content canvas{
    	width: 100%;
    
    }
  </style>
</head>
<body>
  <div id="container" style="margin:25%;border-style: solid;border-color: white;border-width:.5px;"  ></div>
  <script>
    var width = window.innerWidth;
    var height = window.innerHeight;
    
    var stage = new Konva.Stage({
      container: 'container',
      width: width/2,
      height: height/2
    });
    var layer = new Konva.Layer();
    var arrow_left = new Konva.Arrow({
      x: 0,
      y: 0,
      points: [stage.getWidth()/2,stage.getHeight()/2, 0,stage.getHeight()/2],
      pointerLength: 20,
      pointerWidth : 20,
      fill: 'white',
      stroke: 'white',
      strokeWidth: 2
    });
     var arrow_right = new Konva.Arrow({
      x: stage.getWidth(),
      y: 0,
      points: [-stage.getWidth()/2,stage.getHeight()/2,0, stage.getHeight()/2],
      pointerLength: 20,
      pointerWidth : 20,
      fill: 'white',
      stroke: 'white',
      strokeWidth: 2
    });
     var arrow_down = new Konva.Arrow({
      x: 0,
      y: stage.getHeight(),
      points: [stage.getWidth()/2,-stage.getHeight()/2,stage.getWidth()/2, 0],
      pointerLength: 20,
      pointerWidth : 20,
      fill: 'white',
      stroke: 'white',
      strokeWidth: 2
    });
    var arrow_up = new Konva.Arrow({
      x: stage.getWidth()/2,
      y: 0,
      points: [0,stage.getHeight()/2, 0,0],
      pointerLength: 20,
      pointerWidth : 20,
      fill: 'white',
      stroke: 'white',
      strokeWidth: 2
    });
     var arrow_southeast = new Konva.Arrow({
      x: stage.getWidth()/2,
      y: stage.getHeight()/2,
      points: [0,0,stage.getWidth()/2,stage.getHeight()/2],
      pointerLength: 20,
      pointerWidth : 20,
      fill: 'white',
      stroke: 'white',
      strokeWidth: 2
    });
   
     var arrow_northwest = new Konva.Arrow({
       x: 0,
      y: 0,
      points: [stage.getWidth()/2,stage.getHeight()/2,0,0],
      pointerLength: 20,
      pointerWidth : 20,
      fill: 'white',
      stroke: 'white',
      strokeWidth: 2
    });
      var arrow_southwest = new Konva.Arrow({
      x: stage.getWidth()/2,
      y: stage.getHeight()/2,
      points: [0,0,-stage.getWidth()/2,stage.getHeight()/2],
      pointerLength: 20,
      pointerWidth : 20,
      fill: 'white',
      stroke: 'white',
      strokeWidth: 2
    });
     var arrow_northeast = new Konva.Arrow({
      x: stage.getWidth()/2,
      y: stage.getHeight()/2,
      points: [0,0,stage.getWidth()/2,-stage.getHeight()/2],
      pointerLength: 20,
      pointerWidth : 20,
      fill: 'white',
      stroke: 'white',
      strokeWidth: 2
    });
    // add the shape to the layer
    layer.add(arrow_left);
     layer.add(arrow_right);
     layer.add(arrow_down);
     layer.add(arrow_up);
     layer.add(arrow_southeast);
     layer.add(arrow_northwest);
     layer.add(arrow_northeast);
     layer.add(arrow_southwest);
     arrow_left.hide();
     arrow_right.hide();
     arrow_up.hide();
     arrow_down.hide();
     arrow_southeast.hide();
     arrow_northwest.hide();
     arrow_northeast.hide();
     arrow_southwest.hide();
     
      function show_shape(shape){
           shape.show();
      }
      
      setInterval(function(){
      	var random1 = Math.floor(Math.random() * 8);
      	
        if(random1 == 0){	
      	    arrow_right.show();
        } else if (random1 == 1) {
            arrow_left.show();
        } else if (random1 == 2){
            arrow_up.show();
        } else if (random1 == 3) {
            arrow_down.show();
        } else if (random1 == 4) {
            arrow_southeast.show();
        } else if (random1 == 5) {
            arrow_southwest.show();
        } else if (random1 == 6) {
            arrow_northeast.show();
        } else if (random1 == 7) {
            arrow_northwest.show();
        } 
        stage.add(layer);
        arrow_left.hide();
        arrow_right.hide();
        arrow_up.hide();
        arrow_down.hide();
        arrow_southeast.hide();
        arrow_northwest.hide();
        arrow_northeast.hide();
        arrow_southwest.hide();
     
      },1000);
      
      
      
      
      
    // add the layer to the stage
    //stage.add(layer);
   
    
    
  </script>
</body>
</html>
