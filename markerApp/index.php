<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<?php

echo "hello hello";
echo "test test";

?>

<body>

    <div>Sign-up here</div>
    <div>
      <form action = "./includes/signup.inc.php" method = "POST">
          <label for="uname"><b>Username</b></label>
          <input type="text" name="uname" placeholder="Enter Username">

          <label for = "psw1"><b>Enter Password</b></label>
          <input type = "password" placeholder = "Enter Password" name="pwd1" >

          <label for="psw2"><b>Re-Enter Password</b></label>
          <input type="password" placeholder="Re-Enter Password" name="pwd2" >

          <input type="submit" name="submit" value="Sign Up">

      </form>

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <span>Forgot <a href="#">password?</a></span> 
    </div>
    

</body>
</html>