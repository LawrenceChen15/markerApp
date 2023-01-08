<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<?php
$mysqlConn = require __DIR__ . "/dbh.inc.php";

$sqlStatement = "INSERT INTO class (ClassName)
        VALUES (?)";
        
$stmt = $mysqlConn->stmt_init();

if ( ! $stmt->prepare($sqlStatement)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("s",
                  $_POST["nameClass"]);
                  
if ($stmt->execute()) {
    echo "you created the class";
    exit;
} else {
    die($mysqlConn->error . " " . $mysqlConn->errno);
}

?>

</html>



