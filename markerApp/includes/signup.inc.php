<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
</html>

<?php
//if username is empty display error message
if (empty($_POST["uname"])) {
    $errorMessage = "Username is empty";

}
//if password is less than 8 letters display error message
if (strlen($_POST["pwd1"]) < 8) {
    $errorMessage = "Password must be more than 8 characters long";

}

//if password does not contain a letter display error message
if ( ! preg_match("/[a-z]/i", $_POST["pwd1"])) {
    $errorMessage = "Password must contain a letter";

}

//if password does not contain a number display error message
if ( ! preg_match("/[0-9]/", $_POST["pwd1"])) {
    $errorMessage = "Password must contain a number";
}

//if password does not match display error message
if ($_POST["pwd1"] !== $_POST["pwd2"]) {
    $errorMessage = "Password does not match";

}
if ($errorMessage == null) {
    $password_hash = password_hash($_POST["pwd1"], PASSWORD_DEFAULT);

    //initialize database
    $mysqlConn = require __DIR__ . "/dbh.inc.php";

    //insert username and password into database
    $sqlStatement = "INSERT INTO users (userName, password)
        VALUES (?, ?)";

    //initilize database
    $stmt = $mysqlConn->stmt_init();

    //if error display error message
    if (!$stmt->prepare($sqlStatement)) {
        die("SQL error: " . $mysqli->error);
    }

    //bind parameteres to variables
    $stmt->bind_param(
        "ss",
        $_POST["uname"],
        $_POST["pwd1"]
    );
    //if execute go to this page
    if ($stmt->execute()) {
        header("Location: /markerApp/markerApp/frontEnd/signInPage.php");
    }
}
//otherwise display error message
else {
    echo "we got an error";
    header("Location: /markerApp/markerApp/frontEnd/signupPage.php?errorMessage=".$errorMessage);
}
?>




