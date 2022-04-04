<?php

include 'conn.php';

if (isset($_POST['submit'])) {
                
  $first_name = $_POST['fName'];
  $last_name =  $_POST['lName'];
  $gender =   $_POST['gender'];
  $age =   $_POST['age'];
  $department =   $_POST['Department'];
  $join_date =  $_POST['joinDate'];
  $basic_salary = $_POST['bSalary'];
  
  // $insert_query = "INSERT INTO customer (First_name,last_name,gender,Age,Department,doj,bSalary) VALUES ('$first_name','$last_name','$gender','$age','$department','$join_date','$basic_salary') ";
  // $insert_query = "INSERT INTO customer (First_name,last_name,gender,Age,Department,doj,bSalary) VALUES ('$first_name','$last_name','$gender','$age','$department','$join_date','$basic_salary')";
  // if (mysqli_query($conn,$insert_query)) {
     
  //     echo 'data inserted';
  // } else {
  //     echo 'data not  inserted';
      
  // }
  echo $first_name,$last_name,$gender,$age,$department,$join_date,$basic_salary;
}
  

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./Assets/style.css">
</head>


<body>


  <form action="" class="f1" method="post">
    <div class="container">

      <label for="">First Name :</label>
      <input type="text" placeholder="firstName.." name="fName" />
      <label for="">Last Name :</label>
      <input type="text" placeholder="LastName.." name="lName" />
      <label for="">Gender :</label> <br>
      Male<input type="radio" name="gender">
      Female<input type="radio" name="gender">
      <label for="">Age :</label>
      <input type="date" placeholder="Age.." name="age" />
      <select name="Department">
        <option value="" selected disabled>Department</option>
        <option value="">Reserch And Development</option>
        <option value="">Purchase</option>
        <option value="">Sale</option>
        <option value="">Marketing</option>
      </select> <br>
      <label for="">Date Of Join :</label>
      <input type="date" placeholder="date of join.." name="joinDate" />
      <label for="">Basic Salary :</label>
      <input type="number" placeholder="BasicSalary.." name="bSalary" />
      <input type="submit" name="submit" value="Register" />
    </div>

  </form>


</body>

</html>