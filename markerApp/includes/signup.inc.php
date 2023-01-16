<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php

if (empty($_POST["uname"])) {
    $errorMessage = "Username is empty";

}

if (strlen($_POST["pwd1"]) < 8) {
    $errorMessage = "Password must be more than 8 characters long";

}

if ( ! preg_match("/[a-z]/i", $_POST["pwd1"])) {
    $errorMessage = "Password must contain a letter";

}

if ( ! preg_match("/[0-9]/", $_POST["pwd1"])) {
    $errorMessage = "Password must contain a number";
}

if ($_POST["pwd1"] !== $_POST["pwd2"]) {
    $errorMessage = "Password does not match";

}
if ($errorMessage == null) {
    $password_hash = password_hash($_POST["pwd1"], PASSWORD_DEFAULT);

    $mysqlConn = require __DIR__ . "/dbh.inc.php";

    $sqlStatement = "INSERT INTO users (userName, password)
        VALUES (?, ?)";

    $stmt = $mysqlConn->stmt_init();

    if (!$stmt->prepare($sqlStatement)) {
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param(
        "ss",
        $_POST["uname"],
        $_POST["pwd1"]
    );

    if ($stmt->execute()) {
        header("Location: /markerApp/markerApp/frontEnd/signInPage.php");
    }
}

else {
    echo "we got an error";
    header("Location: /markerApp/markerApp/frontEnd/signupPage.php?errorMessage=".$errorMessage);
}
?>
</head>


</html>


