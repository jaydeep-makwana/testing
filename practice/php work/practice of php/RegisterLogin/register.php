<?php
include 'conn.php';

// $selectTable = "SELECT * FROM employee";

# check table exist or not
// if (mysqli_query($conn, $selectTable)) {    
//     echo 'Teble exist';
// }



// $createTable = "CREATE TABLE customer (

//     id int(10) AUTO_INCREMENT not null primary key,
//     firstName varchar(100) not null,
//     lastName varchar(100) not null,
//     age date not null,
//     gender text not null,
//     department text not null,
//     date_of_join date not null,
//     basic_salary int(10) not null,
//     email  varchar(100) not null,

//    )";


# check table created or not
// if (mysqli_query($conn, $createTable)) {
//     echo 'Table created successfuly';
// }



# INSERT DATA
if (isset($_POST['submit'])) {

    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $dateOfJoin = $_POST['doj'];
    $basicSalary = $_POST['bSalary'];
    $email = $_POST['email'];


    $insertQuery = "INSERT INTO customer (firstName,lastName,age,gender,department,date_of_join,basic_salary,email) VALUES ('$firstName','$lastName','$age','$gender','$department ','$dateOfJoin','$basicSalary ','$email')";


    if (mysqli_query($conn, $insertQuery)) {
        echo 'data inserted';
    } else {
        mysqli_error($conn);
    }
}
    




        
        
        
        // var_dump(mysqli_query($conn, $selectTable)); # this function will return length of field


?>
