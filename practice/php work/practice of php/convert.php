<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Length converter</title>
</head>
<body>
<?php

 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 $Int = $_POST['int'];
 
 }
  



   ?>

  
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

 <input type="text" name="int">

 <select name="choose_1" id="">
  <option value="meter">meter</option>
  <option value="kilometer">kilometer</option>
 </select>
 
 
<select name="choose_2" id="">
 <option value="kilometer">kilometer</option>
 <option value="meter">meter</option>
</select>
<BR>  

<input type="submit" value="convert"><br>
ANSWER : <input type="text"  value="<?php echo  $_POST['int']; ?>" />
 

</form>


</body>
</html>