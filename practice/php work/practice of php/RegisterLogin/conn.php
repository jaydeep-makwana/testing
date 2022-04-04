<?php

$conn = mysqli_connect('localhost', 'root', '', 'mydb');
// $createDB = "CREATE DATABASE datasroty";  
// echo mysqli_select_db($conn,'mydb');  # this function will return 1 if database exist..


if (!$conn) { 
    echo mysqli_connect_error($conn);
}
