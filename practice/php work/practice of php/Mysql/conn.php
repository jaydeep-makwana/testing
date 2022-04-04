<?php

$conn = mysqli_connect('localhost', 'root', '', 'EMPLOYEE');
// mysqli_query($conn,' create database EMPLOYEE');
// $select_table = "SELECT * FROM `customer`";
// $create_table = "CREATE TABLE  `customer` (
//     Id int(10) not null AUTO_INCREMENT primary key,
//     first_name varchar(10) not null,
//     last_name varchar(10) not null ,
//     gender text(10) not null ,
//     Age  varchar(10)  not null ,
//     Department varchar(10) not null ,
//     doj varchar(10) not null ,
//     bSalary int(10) not null 
    
// )";
    
//     if (!mysqli_query($conn, $select_table)) {
//         if (mysqli_query($conn, $create_table)) {
//             if (isset($_POST['submit'])) {
                
//                 $first_name = $_POST['fName'];
//                 $last_name =  $_POST['lName'];
//                 $gender =   $_POST['gender'];
//                 $age =   $_POST['age'];
//                 $department =   $_POST['Department'];
//                 $join_date =  $_POST['joinDate'];
//                 $basic_salary = $_POST['bSalary'];
                
//                 // $insert_query = "INSERT INTO customer (First_name,last_name,gender,Age,Department,doj,bSalary) VALUES ('$first_name','$last_name','$gender','$age','$department','$join_date','$basic_salary') ";
//                 $insert_query = "INSERT INTO customer (First_name,last_name,gender,Age,Department,doj,bSalary) VALUES ('$first_name','$last_name','$gender','$age','$department','$join_date','$basic_salary')";
//                 if (mysqli_query($conn,$insert_query)) {
                   
//                     echo 'data inserted';
//                 } else {
//                     echo 'data not  inserted';
                    
//                 }
                
                
//         }
        
//     } else {

//         echo  mysqli_error($conn);
//     }
// } else {
//     echo  mysqli_error($conn);
// }
 
if (isset($_POST['submit'])) {
                
                    $first_name = $_POST['fName'];
                    $last_name =  $_POST['lName'];
                    $gender =   $_POST['gender'];
                    $age =   $_POST['age'];
                    $department =   $_POST['Department'];
                    $join_date =  $_POST['joinDate'];
                    $basic_salary = $_POST['bSalary'];
                    
                    // $insert_query = "INSERT INTO customer (First_name,last_name,gender,Age,Department,doj,bSalary) VALUES ('$first_name','$last_name','$gender','$age','$department','$join_date','$basic_salary') ";
                    $insert_query = "INSERT INTO customer (First_name,last_name,gender,Age,Department,doj,bSalary) VALUES ('$first_name','$last_name','$gender','$age','$department','$join_date','$basic_salary')";
                    if (mysqli_query($conn,$insert_query)) {
                       
                        echo 'data inserted';
                    } else {
                        echo 'data not  inserted';
                        
                    }
                    
                    
            }


