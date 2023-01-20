<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Class.css">
<link rel = "stylesheet" href = "NavigationBar.css">

</head>
<body>

  <!--Display the side bar at the very side of the page-->
<div class="sidenav">

<div class = "classroomText"> Your Classroom
</div>
<?php 
//goes into the database to get the first name, last name and student ID
    $conn = require $_SERVER['DOCUMENT_ROOT'] . "/markerApp/markerApp/includes/dbh.inc.php";
    $sqlStatement = sprintf("SELECT FirstName, LastName, ID FROM students");
    $result=$conn->query($sqlStatement);

//assign variable to first name, last name and student ID     
    while ($row = $result->fetch_assoc()){
      $firstName = $row['FirstName'];
      $lastName = $row['LastName'];
      $studentID = $row['ID'];

    //displays the first name and last name into the side bar 
    echo "<a href = Class.php?studentID=$studentID&firstName=$firstName&lastName=$lastName>" . $firstName. " " .$lastName. " ". $studentID. "</a>";
    }
?>
</div>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>

<!--display the header of the table-->
<body class = "body-center">
<table id = "myTable">
  <tr>
    <th>Assignment</th>
    <th>Mark</th>
    <th>Mark(%)</th>
    <th>Notes</th>
    <th>Dates (COMING SOON)</th>
    <th>Action</th>
  </tr>

  <!-- Get the first name and last name again to display at the top of the evidence record-->
  <form action = "../includes/CreateRecord.inc.php" method = "POST">
  <?php
  //get student ID
  if (isset($_GET["studentID"])) {
    $studentID = $_GET['studentID'];
  }
  else{
    $studentID = "";
  }
  //get the first name
  if (isset($_GET["firstName"])) {
    $firstName = $_GET['firstName'];
  }
  else{
    $firstName = "";
  }
  //get the last name
  if (isset($_GET["lastName"])) {
    $lastName = $_GET['lastName'];
  }
  else{
    $lastName = "";
  }
  //display the first name and the last name
  echo "<h1>" . $firstName . " " . $lastName . "</h1>";

  //get the assignment, number mark, percentage mark, note and date from the database
  if ($studentID != null || $studentID != "") {
    $conn = require $_SERVER['DOCUMENT_ROOT'] . "/markerApp/markerApp/includes/dbh.inc.php";
    $sqlStatement = sprintf("SELECT assignment, numMark, percentageMark, notes, date FROM records WHERE studentID = %s", $studentID);
    $result = $conn->query($sqlStatement);

    //assign each value with a variable
    while ($row = $result->fetch_assoc()) {
      $assignment = $row['assignment'];
      $numMark = $row['numMark'];
      $percentageMark = $row['percentageMark'];
      $notes = $row['notes'];
      $date = $row['date'];

      //display the values into the table 
      echo "<tr>";
      echo "<td>" . $assignment . "</td>";
      echo "<td>" . $numMark . "</td>";
      echo "<td>" . $percentageMark . "</td>";
      echo "<td>" . $notes . "</td>";
      echo "<td>" . $date . "</td>";
    }
  }

?>

<!-- take the first name and last name of the students and display them -->
 <input type="hidden" name="studentID" value="<?php echo $studentID; ?>">
 <input type="hidden" name="firstName" value="<?php echo $firstName; ?>">
 <input type="hidden" name="lastName" value="<?php echo $lastName; ?>">

 <!-- input boxes that the user uses to add the values that are sent to the database -->
  <tr>
    <td><input type='text' placeholder='Input for Column 1' name = "assignment"></td>
    <td><input type='text' placeholder='Input for Column 2' name = "numMark"></td>
    <td><input type='text' placeholder='Input for Column 3' name = "percentageMark"></td>
    <td><input type='text' placeholder='Input for Column 4' name = "notes"></td>
    <td><input type='text' placeholder='Input for Column 5' name = "date"></td>
    <td>
      <br> 
      <!--button to submit everything from the form to the database to store and organize-->
      <button type = "submit" name = "submit">submit</button></td>
  </tr>
  </form>
</table>



<script>
//Attempt to make a drag and drop feature to our evidence record (not sucessful)
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

<script>

//create a table for the elements to enter into 
 function addRow() {
  var table = document.getElementById("myTable");
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);

  //assign the table values to the place holder values
  cell1.innerHTML = "New Cell 1";
  cell2.innerHTML = "<input type='text' placeholder='Input for Column 2'>";
  cell3.innerHTML = "<input type='text' placeholder='Input for Column 3'>";
  cell4.innerHTML = "<input type='text' placeholder='Input for Column 4'>";
  cell5.innerHTML = "<input type='text' placeholder='Input for Column 5'>"; 
}

</script>

<div class = "printRecord "> (COMING SOON)
  <div class = "parent">
    <div id="dest_copy" ondrop="drop_handler(event);" ondragover="dragover_handler(event);">
      <div id="grid-container">
        <script>
          //display the table created that is able to be drag and dropped into
          var array = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
            for(var i = 0; i < 12; i++) {
              var row = document.createElement("div");
              row.setAttribute("class", "grid-row");
            for(var j = 0; j < 12; j++) {
              var cell = document.createElement("div");
              cell.setAttribute("class", "grid-cell");
              row.appendChild(cell);
            }
          document.getElementById("grid-container").appendChild(row);}
        </script>
      </div>
    </div>
  </div>
</div> 


<!--<div id = "tasks">
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
</div>-->

<!--display the placeholder images that can be drag and dropped-->
<div>
  <img id="src_copy1" src="/markerApp/markerApp/Pictures/Circle1.png" draggable="true"ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" width="69" height="69">
  <img id="src_copy2" src="/markerApp/markerApp/Pictures/Circle2.png" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" width="69" height="69">
  <img id="src_copy3" src="/markerApp/markerApp/Pictures/Circle3.png" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" width="69" height="69">
  <img id="src_copy4" src="/markerApp/markerApp/Pictures/Circle4.png" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);" width="80" height="80">
</div>
</body>

<!--display the navigation bar at the top of the page-->
<div class = "divChange">
  <ul>
    <li><a href="./HomePage.html">Home</a></li>
    <li><a href="./SettingsPage.html">Settings</a></li>
    <li><a href="./ContactPage.html">Contact</a></li>
    <li><a href="./AboutPage.html">About</a></li>
    <li><a href="./signInPage.php">Login</a></li>

  </ul>
</div>

</html>
