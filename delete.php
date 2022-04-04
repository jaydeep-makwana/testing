<?php
    $conn = mysqli_connect('localhost', 'root', '', 'mydb');
$id = $_GET['id'];
    $query = "DELETE FROM user WHERE id=$id";
    $rslt = mysqli_query($conn, $query);
header('location:index.php');


      ?>




