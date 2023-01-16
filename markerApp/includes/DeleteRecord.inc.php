<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<?php
$mysqlConn = require __DIR__ . "/dbh.inc.php";

$id = $_GET['assignment'];

$sqlStatement = "DELETE FROM records WHERE assignment = $id";
        
$stmt = $mysqlConn->stmt_init();

if ( ! $stmt->prepare($sqlStatement)) {
    die("SQL error: " . $mysqli->error);
}

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>

</html>



