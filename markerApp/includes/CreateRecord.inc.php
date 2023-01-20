<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
</html>
<?php
    //enter database
    $mysqlConn = require __DIR__ . "/dbh.inc.php";
    //insert values into specific table sections
    $sqlStatement = "INSERT INTO records (studentID, assignment, numMark, percentageMark, notes, date)
        VALUES (?, ?, ?, ?, ?, ?)";
    
    //initialize the database
    $stmt = $mysqlConn->stmt_init();

    //if error send message
    if ( ! $stmt->prepare($sqlStatement)) {
        die("SQL error: " . $mysqli->error);
    }

    //assign variable to student ID, first name and last name
    $studentID = $_POST["studentID"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];

    //bind parameters to the variables
    $stmt->bind_param("ississ",
                  $_POST["studentID"],
                  $_POST["assignment"],
                  $_POST["numMark"],
                  $_POST["percentageMark"],
                  $_POST["notes"],
                  $_POST["date"]);

    //if executed go to this page   
    if ($stmt->execute()) {
        header("Location:/markerApp/markerApp/frontEnd/Class.php?studentID=".$studentID."&firstName=".$firstName."&lastName=".$lastName);
    } 
    //otherwise die
    else {
        die($mysqlConn->error . " " . $mysqlConn->errno);
    }
?>