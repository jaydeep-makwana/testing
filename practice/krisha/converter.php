<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>measurment converter</title>
 <style>
  input{
   margin: 10px;
   padding:10px;
  }
 </style>
</head>
<body>
 
<form action="converter.php" method="post">
 <input type="text" name="name"> = <input type="text" name="name1"><br>
 <select name="" id="dropdown">
  <option value="kilometre">kilometre</option>
  <option value="metre">metre</option>
  <option value="centimetre">centimetre</option>
  <option value="millimetre">millimetre</option>
  <option value="micrometre">micrometre</option>
  <option value="nenoometre">nenoometre</option>
  <option value="mile">mile</option>
  <option value="yard">yard</option>
  <option value="foot">foot</option>
  <option value="inch">inch</option>
  <option value="nautical mile">nautical mile</option>
 </select>
 
 <select name="" id="">
  <option value="kilometre">kilometre</option>
  <option value="metre">metre</option>
  <option value="centimetre">centimetre</option>
  <option value="millimetre">millimetre</option>
  <option value="micrometre">micrometre</option>
  <option value="nenoometre">nenoometre</option>
  <option value="mile">mile</option>
  <option value="yard">yard</option>
  <option value="foot">foot</option>
  <option value="inch">inch</option>
  <option value="nautical mile">nautical mile</option>
 </select>
</form>

<button onclick="check()">convert</button>

<?php



?>


</body>
</html>