<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="signInPage.css">
<link rel = "stylesheet" href = "NavigationBar.css">

</head>
<body>

    <div class = "center">Sign-in here</div>
    <div class="container">
      <form action = "../includes/signin.inc.php" method = "POST">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd1" >

        <button class = "buttonIn" type = "submit" name = "submit">Login</button>
      </form>        

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <span class="psw">Forgot <a href="#">password?</a></span>
      
      <div>
      <a href = signupPage.php>
        <button class = "buttonUp" type = "submit">Sign Up here</button>
      </a>

      <?php
       if ($_SESSION["access"] == false) {
        echo "Password Is Incorrect";
        session_unset();
        session_destroy();
       }
        else{
        session_abort();
    }

    ?>
      
    </div>
    </div>
</body>
<ul>
  <li><a href="./HomePage.html">Home</a></li>
  <li><a href="./SettingsPage.html">Settings</a></li>
  <li><a href="./ContactPage.html">Contact</a></li>
  <li><a href="./AboutPage.html">About</a></li>
    </ul>
</html>
