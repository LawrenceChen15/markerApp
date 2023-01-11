<?php

session_start();
$_SESSION["access"]= true;

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<?php
echo "Signing in  the user now ... ";


if (isset($_POST["uname"])) {
    echo "uname is set in post .      ";
} else {
    echo "name is not set ";
}

$conn = require __DIR__ . "/dbh.inc.php";

$sqlStatement = sprintf("SELECT * FROM users
                    WHERE userName = '%s' AND password='%s'",
                   $conn->real_escape_string($_POST['uname']),
                   $conn->real_escape_string($_POST['pwd1']));

if (isset($_POST['submit'])){
    
    $result=$conn->query($sqlStatement);
    $myUser = $result->fetch_assoc();

    if($myUser) {
        header("Location: /markerApp/markerApp/frontEnd/Homepage.html");
        exit();
    }
    else{
        $_SESSION["access"]= false;
        header("Location: /markerApp/markerApp/frontEnd/signInPage.php");
        exit();
    }
} else {
    echo 'submit is not posted to the form';
}
?>
</html>