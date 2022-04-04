<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/CSS/style.css">
    <title>Register</title>
</head>

<body>
    <div class="form">

    <form action="register.php" method="post">

        <label for="">First Name</label>
        <input class="flex" type="text" name="fName">

        <label for="">Last Name</label>
        <input class="flex" type="text" name="lName">

        <label for="">Age</label>
        <input class="flex" type="date" name="age">

        <label for="">Gender</label> <br>
        Male<input type="radio" value="male" name="gender">
        Female<input type="radio" value="female" name="gender"> <br>

        <label for="">Department</label> <br>
        <select name="department" id="">
            <option value="" selected disabled>---Chhose Department</option>
            <option value="R & D">R & D</option>
            <option value="Sales">Sales</option>
            <option value="Marketing">Marketing</option>
            <option value="HR">HR</option>
        </select> <br>

        <label for="">Date Of Join</label>
        <input type="date" class="flex" name="doj">

        <label for="">Basic Salary</label>
        <input type="number" class="flex" name="bSalary">

        <label for="">Email</label>
        <input type="email" class="flex" name="email">



        <input type="submit" name="submit" class="flex">

    </form>
    </div>

</body>

</html>
<?php

// if (isset($_POST['submit'])) {
//     $firstName = $_POST['fName'];
//     $lastName = $_POST['lName'];
//     $age = $_POST['age'];
//     $gender = $_POST['gender'];
//     $department = $_POST['department'];
//     $dateOfJoin = $_POST['doj'];
//     $basicSalary = $_POST['bSalary'];
//     $email = $_POST['email'];
//     $mobile = $_POST['mobile'];

//     echo $firstName, '<br>', $lastName, '<br>', $age, '<br>', $gender, '<br>', $department, '<br>', $dateOfJoin, '<br>', $basicSalary, '<br>', $email, '<br>', $mobile;
// }

?>