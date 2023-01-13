<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CreateClass.css">
    <link rel ="stylesheet" href = "NavigationBar.css">

</head>
<h1>Create a Classroom:
</h1>

<body>

<div id = "div3"> <p class = "nameStudents">Class Name: </p> 

<form action = "../includes/CreateClass.inc.php" class = "className" method = "POST">
      <label for="className"></label>
      <input type="text" name="nameClass">

</div>

<div id = "div1">
    <p class = "numStudents">Number of students: </p>
</div>

<div id = "div2">
    <input id="number" type="number" value="1" min="0" step="1" max="100" />
    </label>
    <button id="create"> Submit</button>
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
<button class = "butSave" id = "saveClass" type = "submit">Save Class</button>
</div>
</body>
</form>

<ul>
<li><a href="./HomePage.html">Home</a></li>
  <li><a href="./SettingsPage.html">Settings</a></li>
  <li><a href="./ContactPage.html">Contact</a></li>
  <li><a href="./AboutPage.html">About</a></li>
    </ul>
</html>


