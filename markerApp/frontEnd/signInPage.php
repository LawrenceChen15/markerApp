<?php
    $valid = true;
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
    <!--form that goes to the back end file of the signin page-->
    <div class="container">
      <form action = "../includes/signin.inc.php" method = "POST">
      
      <!--user input the username-->
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname">

      <!--user input the password-->
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd1" >

      <input type="hidden" name="validUser" value="<?php echo $valid; ?>">
      <!--submit button that sends it to back end file-->
      <button class = "buttonIn" type = "submit" name = "submit">Login</button>
      </form>        

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <span class="psw">Forgot <a href="#">password?</a></span>
      
      <div>
        <!--button to go to signup page-->
        <a href = signupPage.php>
          <button class = "buttonUp" type = "submit">Sign Up here</button>
        </a>

      <?php
      //send a error prompt if invalid user 
      if (isset($_GET["validUser"])) {

        if ($_GET["validUser"] == "false") {
          echo "Password is incorrect";
        } else {
          echo "Password is correct";
        }
      }
      ?>
      
    </div>
  </div>
</body>

<!--display the navigation bar-->
<ul>
  <li><a href="./HomePage.html">Home</a></li>
  <li><a href="./SettingsPage.html">Settings</a></li>
  <li><a href="./ContactPage.html">Contact</a></li>
  <li><a href="./AboutPage.html">About</a></li>
  <li><a href="./signInPage.php">Logout</a></li>

    </ul>
</html>
