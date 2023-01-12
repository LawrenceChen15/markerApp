<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="signInPage.css">

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
    <ul>
      <li><a class="active" href="#home">Home</a></li>
      <li><a href="#news">News</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#about">About</a></li>
    </ul>
</body>
</html>
