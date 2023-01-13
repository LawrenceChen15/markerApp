<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CreateClass.css">
    <link rel = "stylesheet" href = "NavigationBar.css">


<h1> Create Students:
</h1>

<body>

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


      <label for="nameFirst"><b>First Name</b></label>
      <input type="text" placeholder="First Name" name="firstName" >

      <label for = "nameLast"><b>Last Name</b></label>
      <input type = "text" placeholder = "Last Name" name = "lastName" >

<div>
<button type = "submit">Save Student</button>
</div>
</form>
<div>
<a href="Homepage.html">
  <button>Go to other file</button>
</a>
</div>
</body>
<ul>
  <li><a href="./HomePage.html">Home</a></li>
  <li><a href="./SettingsPage.html">Settings</a></li>
  <li><a href="./ContactPage.html">Contact</a></li>
  <li><a href="./AboutPage.html">About</a></li>
    </ul>
</html>

