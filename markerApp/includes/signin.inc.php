<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<?php
    //display message when signing in
    echo "Signing in  the user now ... ";
    if (isset($_POST["uname"])) {
        echo "uname is set in post .      ";
    }  
    else {
        echo "name is not set ";
    }

    //go to database
    $conn = require __DIR__ . "/dbh.inc.php";

    //select username and password from database
    $sqlStatement = sprintf("SELECT * FROM users
                    WHERE userName = '%s' AND password='%s'",
                   $conn->real_escape_string($_POST['uname']),
                   $conn->real_escape_string($_POST['pwd1']));
    //if submit
    if (isset($_POST['submit'])){
        //get user from database
        $result=$conn->query($sqlStatement);
        $myUser = $result->fetch_assoc();

        //if user is valid go to this page 
        if($myUser) {
            //$_SESSION["access"] = true;
            //echo $_SESSION["access"];
            header("Location: /markerApp/markerApp/frontEnd/Homepage.html");
        }
        //otherwise go to this page 
        else{
            //$_SESSION["access"] = false;
            header("Location: /markerApp/markerApp/frontEnd/signInPage.php?validUser=false");
        }
    } 
    else {
        echo 'submit is not posted to the form';
    }
?>
</html>