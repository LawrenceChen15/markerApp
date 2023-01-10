<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
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
    echo "you created a student";
    exit;
} else {
    die($mysqlConn->error . " " . $mysqlConn->errno);
}

?>

</html>


