<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
</html>
<?php
$mysqlConn = require __DIR__ . "/dbh.inc.php";

$sqlStatement = "INSERT INTO students (FirstName, LastName)
        VALUES (?, ?)";
        
$stmt = $mysqlConn->stmt_init();

if ( ! $stmt->prepare($sqlStatement)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ss",
                  $_POST["firstName"],
                  $_POST["lastName"]);
                  
if ($stmt->execute()) {
    echo "you created a student. Now assign student to class";
} else {
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

$sqlStatement = "INSERT INTO classstudentassosication (classID, studentID)
        VALUES (?, ?)";
        
$stmt = $mysqlConn->stmt_init();

if ( ! $stmt->prepare($sqlStatement)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ss",
                  $_POST["classID"],
                  $studentId);
                  
if ($stmt->execute()) {
    header("Location: /markerApp/markerApp/frontEnd/CreateStudents.php");
    exit();
} else {
    die($mysqlConn->error . " " . $mysqlConn->errno);
}

?>
