<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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


/* Set a style for all buttons */

.buttonUp {
  background-color: #3643f4;
  float: left;
  color: white;
  padding-top: 10px;
  padding-bottom: 10px;
  margin: 0;
  border: none;
  cursor: pointer;
  width: 15%;
}

button:hover {
  opacity: 0.8;
}

h1{
    padding-top: 50px;
    font-size: 60px;
}

#div3{
  padding-left: 10px;
  display: flex;
  font-size: 35px;
}

.className{
  margin-top: 25px;
  width: 300px;
  display: flex;
  padding-bottom: 30px;
}


input[type=text] {
  width: 35%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.butStudents{
  height: 60px;
  width: 120px;

}

label {
    display: block;
}

.dropDown{
    width: 120px;
    height: 60px;
}

</style>

<h1> Create Students:
</h1>

<body>

<div id = "div3">
<form>
      <label for="className"><b>Class Name:</b></label>
      <select class = "dropDown" name = "classID">

      <?php 
    $conn = require $_SERVER['DOCUMENT_ROOT'] . "/markerApp/markerApp/includes/dbh.inc.php";
    $sqlStatement = sprintf("SELECT className FROM class");
    $result=$conn->query($sqlStatement);

    
    while ($row = $result->fetch_assoc()){
    echo "<option value=>" . $row['className'] . "</option>";
    }
?>
</select>
</div>

<div>
<form action = "../includes/CreateStudents.inc.php" method = "POST">
      <label for="nameFirst"><b>First Name</b></label>
      <input type="text" placeholder="First Name" name="firstName" >

      <label for = "nameLast"><b>Last Name</b></label>
      <input type = "text" placeholder = "Last Name" name = "lastName" >

</div>



<!--<div>
    <p class = "nameStudents">Student names</p>

    <div>
  <script>
function appendInputs(num){
    var target = document.getElementById('divSelections'),
        form = document.createElement('form'),
        input = document.createElement('input'),
        tmp;
    num = typeof num == 'undefined' ?  parseInt(document.getElementById('number').value, 10) : num;
    for (var i = 0; i < num*2; i++){
        tmp = input.cloneNode();
        tmp.id = 'input_' + (i+1);
        tmp.name = '';
        tmp.type = 'text';
        tmp.placeholder = tmp.id;
        form.appendChild(tmp);
    }
    target.appendChild(form);
}

document.getElementById('create').addEventListener('click', function(e){
    e.preventDefault();
    appendInputs();
});
      
  </script>

    </div>

</div>

<div id="divSelections"></div>

-->

<div>
<button class = "butStudents" id = "saveStudents" type = "submit">Save Student</button>
</div>
</form>
</body>
<ul>
      <li><a href="./IntroductionPage.html">Home</a></li>
      <li><a href="./NewsPage.html">News</a></li>
      <li><a class="active" href="./ContactPage.html">Contact</a></li>
      <li><a href="./AboutPage.html">About</a></li>
    </ul>
</html>


<style>

