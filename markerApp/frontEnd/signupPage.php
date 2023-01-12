<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="signupPage.css">

</head>
<body>

    <div class = "center">Sign-up here</div>
    <div class="container">
      <form action = "../includes/signup.inc.php" method = "POST">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" >

      <label for = "psw1"><b>Enter Password</b></label>
      <input type = "password" placeholder = "Enter Password" name = "pwd1" >

      <label for="psw2"><b>Re-Enter Password</b></label>
      <input type="password" placeholder="Re-Enter Password" name="pwd2" >

      <button type = "submit" name = "submit">Sign Up</button>

      </form>

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember Me
      </label>
      <span class="psw">Forgot <a href="#">Password?</a></span> 
    </div>
    
    <ul>
      <li><a class="active" href="#home">Home</a></li>
      <li><a href="#news">News</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#about">About</a></li>
    </ul>
</body>
</html>
