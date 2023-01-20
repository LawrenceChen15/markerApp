<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "CreateStudents.css">
    <link rel = "stylesheet" href = "NavigationBar.css">

<h1> Create Students:
</h1>

<style>

.mainbody{
  padding-left: 160px;
  padding-top: 60px;
}
</style>

<body class = "mainbody">

<div id = "div3">
<form action = "../includes/CreateStudents.inc.php" method = "POST">
      <label for="className"><b>Class Name:</b></label>
      <select class = "dropDown" name="classID">
      <?php 
    $conn = require $_SERVER['DOCUMENT_ROOT'] . "/markerApp/markerApp/includes/dbh.inc.php";
    $sqlStatement = sprintf("SELECT className, classID FROM class");
    $result=$conn->query($sqlStatement);

    
    while ($row = $result->fetch_assoc()){
      $className = $row['className'];
        $classID = $row['classID'];
    echo "<option value=$classID>" . $className . "</option>";
    }
?>
</select>
</div>
   <div id = "names">
      <label for="nameFirst"><b>First Name</b></label>
      <input type="text" placeholder="First Name" name="firstName" >

      <label for = "nameLast"><b>Last Name</b></label>
      <input type = "text" placeholder = "Last Name" name = "lastName" >
  </div>      

  <div class = "seperate">
      <button class = "saveStudent" type = "submit">Save Student</button>
  </div>

</form>


<div class = "homepage">
  <a href="Homepage.html">
    <button class = "saveStudent"> Go to Homepage</button>
  </a>
</div>

</body>



  <style>
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #474e5d;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #ffffff;
  display: block;
}

.sidenav a:hover {
  color: #0424df;
  cursor: pointer;
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

.studentText{
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: #ffffff;
}

</style>

<body>
<div class="sidenav">

<div class = "studentText"> Your Students
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



</body>
<ul>
  <li><a href="./HomePage.html">Home</a></li>
  <li><a href="./SettingsPage.html">Settings</a></li>
  <li><a href="./ContactPage.html">Contact</a></li>
  <li><a href="./AboutPage.html">About</a></li>
  <li><a href="./signInPage.php">Login</a></li>
    </ul>
</html>

