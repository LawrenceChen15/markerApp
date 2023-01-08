<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

body {margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: rgb(255, 255, 255);
}

.active {
  background-color: #042baa;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4064e9;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #3643f4;
}

.container {
  padding-right: 15%;
  padding-left: 15%;
  padding-bottom: 30%;
  padding-top: 2px;
}

span.psw {
  float: right;
}



/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

.center{
    padding-left: 15%;
    font-size: 250%;
    margin-top: 150px;
}
</style>

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
