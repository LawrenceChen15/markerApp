<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
</html>
<?php
    //enter into database
    $mysqlConn = require __DIR__ . "/dbh.inc.php";

    //put post value into class name
    $sqlStatement = "INSERT INTO class (ClassName)
        VALUES (?)";
    //inialize the database
    $stmt = $mysqlConn->stmt_init();
    //if error occurs send error message
    if ( ! $stmt->prepare($sqlStatement)) {
        die("SQL error: " . $mysqli->error);
    }

    //bind the parameter to variable
    $stmt->bind_param("s",
        $_POST["nameClass"]);
    
    //if excuted go to this page
    if ($stmt->execute()) {
        header("Location: /markerApp/markerApp/frontEnd/CreateStudents.php");
        exit;
    } 
    //otherwise die
    else {
        die($mysqlConn->error . " " . $mysqlConn->errno);
    }
?>


