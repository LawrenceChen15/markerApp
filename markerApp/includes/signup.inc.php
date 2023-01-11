<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<?php

if (empty($_POST["uname"])) {
    die("Name field is required");
}

if (strlen($_POST["pwd1"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["pwd1"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["pwd1"])) {
    die("Password must contain at least one number");
}

if ($_POST["pwd1"] !== $_POST["pwd2"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["pwd1"], PASSWORD_DEFAULT);

$mysqlConn = require __DIR__ . "/dbh.inc.php";

$sqlStatement = "INSERT INTO users (userName, password)
        VALUES (?, ?)";
        
$stmt = $mysqlConn->stmt_init();

if ( ! $stmt->prepare($sqlStatement)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ss",
                  $_POST["uname"],
                  $_POST["pwd1"]);
                  
if ($stmt->execute()) {
    header("Location: /markerApp/frontEnd/signInPage.php");
    exit;
} else {
    die($mysqlConn->error . " " . $mysqlConn->errno);
}

?>

</html>


