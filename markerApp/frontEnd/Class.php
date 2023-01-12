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
  <a href="ForgetPasswordPage.html">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>

<style>
  .body-center{
  margin-left: 13%;
}
.grid-row {
  display: flex;
}

.grid-cell {
  width: 100px;
  height: 70px;
  border: 1px solid black;
}

</style>

</style>
<script>
function dragstart_handler(ev) {
 console.log("dragStart");
 ev.dataTransfer.setData("text", ev.target.id);
 // Tell the browser both copy and move are possible
 ev.effectAllowed = "copyMove";
}
function dragover_handler(ev) {
 console.log("dragOver");
 // Change the target element's border to signify a drag over event
 // has occurred
 ev.preventDefault();
}
function drop_handler(ev) {
  console.log("Drop");
  ev.preventDefault();
  // Get the id of drag source element (that was added to the drag data
  // payload by the dragstart event handler)
  var id = ev.dataTransfer.getData("text");
  // Copy the element if the source and destination ids are both "copy"
  if (id == "src_copy1" || "src_copy2" || "src_copy3" || "src_copy4" && ev.target.id == "dest_copy") {
   var nodeCopy = document.getElementById(id).cloneNode(true);
   nodeCopy.id = "newId";
   ev.target.appendChild(nodeCopy);
  }
}
function dragend_handler(ev) {
  console.log("dragEnd");
  ev.dataTransfer.clearData();
}
</script>
</head>

<head>
<body class = "body-center">
<div id="dest_copy" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
<div id="grid-container">
  <script>
    for(var i = 0; i < 12; i++) {
      var row = document.createElement("div");
      row.setAttribute("class", "grid-row");
      for(var j = 0; j < 12; j++) {
        var cell = document.createElement("div");
        cell.setAttribute("class", "grid-cell");
        row.appendChild(cell);
      }
      document.getElementById("grid-container").appendChild(row);
    }
  </script>
</div>
  
</div>

 <div>
<img id="src_copy1" src="/markerApp/markerApp/Pictures/Circle1.png" draggable="true"ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" width="69" height="69">
<img id="src_copy2" src="/markerApp/markerApp/Pictures/Circle2.png" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" width="69" height="69">
<img id="src_copy3" src="/markerApp/markerApp/Pictures/Circle3.png" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" width="69" height="69">
<img id="src_copy4" src="/markerApp/markerApp/Pictures/Circle4.png" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" width="80" height="80">
 </div>

</body>
</head>
</html>
