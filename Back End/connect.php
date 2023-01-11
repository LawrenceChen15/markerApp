<?php
session_start();
$db = parse_url(getenv("postgresql://lawrence:tr6n2EVqeexQUN4apQzN0Q@free-tier11.gcp-us-east1.cockroachlabs.cloud:26257/defaultdb?sslmode=verify-full&options=--cluster%3Dhermit-fowl-2659"));

$pdo = new PDO("pgsql:" . sprintf(
    "postgresql://lawrence:tr6n2EVqeexQUN4apQzN0Q@free-tier11.gcp-us-east1.cockroachlabs.cloud:26257/defaultdb?sslmode=verify-full&options=--cluster%3Dhermit-fowl-2659",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));

$email = $_POST["Username/Email"];
$passcode = $_POST["Password"];

//echo 'email: '.$email.'\n';
//echo 'password: '.$passcode.'\n';

if(!isset($_SESSION["loggedIn"])){
  $result = $pdo->query('SELECT username, password FROM logininfo');
  if ($result->rowCount() > 0){
    $row = $result->fetch(PDO::FETCH_ASSOC);

    //echo $email.' '.$row['username'];
    //echo $passcode.' '.$row['password'];

    if($row['username'] == $email && $row['password'] == $passcode){
      $_SESSION["loggedIn"] = true;
      $_SESSION["username"] = $email;
      // Correct username and password, logged in	
      header('Location: IdeasPages/IdeasPage.php');
      die();
      //echo 'correct';
    }
      else {
      // Incorrect password
      //$_SESSION["error"] = 'Incorrect username and/or password!';
      header('Location: LoginPage.html');
      echo 'incorrect';
    }
  } 
}
else{
  header('Location: LoginPage.html');
}

?>
