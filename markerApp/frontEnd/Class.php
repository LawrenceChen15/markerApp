<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>
   

<head>
<style>
.grid-container {
  display: grid;
  row-gap: 50px;
  grid-template-columns: auto auto auto;
  background-color: #2196F3;
  padding: 10px;
}

.body-center{
  margin-left: 13%;
}

.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}

#drag1, #drag2, #drag3, #drag4{
  float:left;
}
</style>
</head>
<body class = "body-center">

<div ondrop="drop(event)" ondragover="allowDrop(event)" class="grid-container">
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
</div>

<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
</script>
</head>
<body>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<img id="drag1" src="/markerApp/markerApp/Pictures/Circle1.png" draggable="true" ondragstart="drag(event)" width="69" height="69">
<img id="drag2" src="/markerApp/markerApp/Pictures/Circle2.png" draggable="true" ondragstart="drag(event)" width="69" height="69">
<img id="drag3" src="/markerApp/markerApp/Pictures/Circle3.png" draggable="true" ondragstart="drag(event)" width="69" height="69">
<img id="drag4" src="/markerApp/markerApp/Pictures/Circle4.png" draggable="true" ondragstart="drag(event)" width="80" height="80">


</body>
</html>
</body>
</html> 

</body>
</html>