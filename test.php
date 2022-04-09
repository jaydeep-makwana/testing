<?php
 
 $conn = mysqli_connect('localhost','root','','mydb');

 
 
     
 

// echo $a ;
 
$query = "SELECT * FRO user";

$result = mysqli_query($conn, $query);
 
// echo mysqli_errno($conn);


$assoc = mysqli_fetch_assoc($result);

echo mysqli_error($conn);
// echo mysqli_errno($conn);


echo '<pre>';
// var_dump($a);
print_r($assoc);
echo '</pre>';
