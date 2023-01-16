<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
</html>
<?php

$mysqlConn = require __DIR__ . "/dbh.inc.php";

$sqlStatement = "INSERT INTO records (studentID, assignment, numMark, percentageMark, notes, date)
        VALUES (?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqlConn->stmt_init();

if ( ! $stmt->prepare($sqlStatement)) {
    die("SQL error: " . $mysqli->error);
}

$studentID = $_POST["studentID"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];

$stmt->bind_param("ississ",
                  $_POST["studentID"],
                  $_POST["assignment"],
                  $_POST["numMark"],
                  $_POST["percentageMark"],
                  $_POST["notes"],
                  $_POST["date"]);

                  
if ($stmt->execute()) {
    header("Location:/markerApp/markerApp/frontEnd/Class.php?studentID=".$studentID."&firstName=".$firstName."&lastName=".$lastName);
} else {
    die($mysqlConn->error . " " . $mysqlConn->errno);
}