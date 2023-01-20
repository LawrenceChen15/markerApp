<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
</html>
<?php
    //go to database
    $mysqlConn = require __DIR__ . "/dbh.inc.php";
    //insert values into first name and last name
    $sqlStatement = "INSERT INTO students (FirstName, LastName)
        VALUES (?, ?)";
    //initialize database
    $stmt = $mysqlConn->stmt_init();

    //if error die
    if ( ! $stmt->prepare($sqlStatement)) {
    die("SQL error: " . $mysqli->error);
    }
    //bind parameters to variables
    $stmt->bind_param("ss",
                  $_POST["firstName"],
                  $_POST["lastName"]);
    
    //if execute display message
    if ($stmt->execute()) {
    echo "you created a student. Now assign student to class";
    } 
    //otherwise die
    else {
    die($mysqlConn->error . " " . $mysqlConn->errno);
    }

    // Now find student's ID
    $sqlStatement = sprintf("SELECT * FROM students
                    WHERE firstName = '%s' AND lastName ='%s'",
                   $mysqlConn->real_escape_string($_POST['firstName']),
                   $mysqlConn->real_escape_string($_POST['lastName']));
    
    $result=$mysqlConn->query($sqlStatement);
    $newStudent = $result->fetch_assoc();

    $studentId = $newStudent['ID'];
    echo "Student ID returned -> $studentId";

    //insert class ID and student ID into table
    $sqlStatement = "INSERT INTO classstudentassosication (classID, studentID)
        VALUES (?, ?)";
    
    //initialize the database
    $stmt = $mysqlConn->stmt_init();
    
    //if error die
    if ( ! $stmt->prepare($sqlStatement)) {
        die("SQL error: " . $mysqli->error);
    }
    //bind parameters to class ID and student ID
    $stmt->bind_param("ss",
                  $_POST["classID"],
                  $studentId);
    
    //if executed go to this page
    if ($stmt->execute()) {
        header("Location: /markerApp/markerApp/frontEnd/CreateStudents.php");
        exit();
    } 
    //otherwise die
    else {
        die($mysqlConn->error . " " . $mysqlConn->errno);
    }
?>
