<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Class.css">
<link rel = "stylesheet" href = "NavigationBar.css">


</head>
<body>

<div class="sidenav">

<div class = "classroomText"> Your Classroom
</div>
<?php 
    $conn = require $_SERVER['DOCUMENT_ROOT'] . "/markerApp/markerApp/includes/dbh.inc.php";
    $sqlStatement = sprintf("SELECT FirstName, LastName, ID FROM students");
    $result=$conn->query($sqlStatement);

    
    while ($row = $result->fetch_assoc()){
      $firstName = $row['FirstName'];
      $lastName = $row['LastName'];
      $studentID = $row['ID'];
    echo "<a>" . $firstName. " " .$lastName. "</a>";
    }
?>
</div>

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



<body class = "body-center">
<div id="gridContainer">
  <div class="gridRow">
    <div class="gridCell"><p>1-</p></div>
    <div class="gridCell"><p>1</p></div>
    <div class="gridCell"><p>1+</p></div>
    <div class="gridCell"><p>2-</p></div>
    <div class="gridCell"><p>2</p></div>
    <div class="gridCell"><p>2+</p></div>
    <div class="gridCell"><p>3-</p></div>
    <div class="gridCell"><p>3</p></div>
    <div class="gridCell"><p>3+</p></div>
    <div class="gridCell"><p>4-</p></div>
    <div class="gridCell"><p>4</p></div>
    <div class="gridCell"><p>4+</p></div>
  </div>
</div>

<div class = "parent">
<div id="dest_copy" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
<div id="grid-container">
  <script>
    var array = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
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


<div id = "tasks">
<div id="gridContainerrow">
  <div class="rowss">
    <div class="gridrowss"><p></p></div>
    <div class="gridCell"><p></p></div>
    <div class="gridCell"><p></p></div>
    <div class="gridCell"><p></p></div>
    <div class="gridCell"><p></p></div>
    <div class="gridCell"><p></p></div>
    <div class="gridCell"><p></p></div>
    <div class="gridCell"><p></p></div>
    <div class="gridCell"><p></p></div>
    <div class="gridCell"><p></p></div>
    <div class="gridCell"><p></p></div>
    <div class="gridCell"><p></p></div>
    
  </div>
</div>

  </script>
</script>

</div>
</div>

</div>



 <div>
<img id="src_copy1" src="/markerApp/markerApp/Pictures/Circle1.png" draggable="true"ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" width="69" height="69">
<img id="src_copy2" src="/markerApp/markerApp/Pictures/Circle2.png" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" width="69" height="69">
<img id="src_copy3" src="/markerApp/markerApp/Pictures/Circle3.png" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" width="69" height="69">
<img id="src_copy4" src="/markerApp/markerApp/Pictures/Circle4.png" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" width="80" height="80">
 </div>

</body>
  </body>
</head>

<div class = "divChange">
<ul>
    <li><a href="./HomePage.html">Home</a></li>
    <li><a href="./SettingsPage.html">Settings</a></li>
    <li><a href="./ContactPage.html">Contact</a></li>
    <li><a href="./AboutPage.html">About</a></li>
  </ul>
</div>

</html>
