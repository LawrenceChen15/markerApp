<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CreateClass.css">
    <link rel ="stylesheet" href = "NavigationBar.css">
</head>

<!--header to say to create Classroom-->
<h1>Create a Classroom:</h1>

<body>
    <!--prompt user for the name of the class-->
    <div id = "div3"> <p class = "nameStudents">Class Name: </p> 
        <form action = "../includes/CreateClass.inc.php" class = "className" method = "POST">
            <label for="className"></label>
            <input type="text" name="nameClass">
            </div>

            <!--asks for number of students-->
            <div id = "">
                <label for = "numStudents" class = "numStudents">Number of students:</label>
                <input id="number" type="number" value="1" min="0" step="1" max="100" />
            </div>

            <!--button to submit the form-->
            <div>
                <button class = "butSave" id = "create" type = "submit">Save Class</button>
            </div>
        </form>
</body>

<!--display the navigation bar at the top of the page-->
<ul>
<li><a href="./HomePage.html">Home</a></li>
  <li><a href="./SettingsPage.html">Settings</a></li>
  <li><a href="./ContactPage.html">Contact</a></li>
  <li><a href="./AboutPage.html">About</a></li>
  <li><a href="./signInPage.php">Login</a></li>

    </ul>
</html>


