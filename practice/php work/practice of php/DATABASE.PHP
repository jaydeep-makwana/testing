<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "customer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO details (Id ,First_Name, Middel_Name, Last_Name, Mobile_No.)
VALUES ( '6' , 'John', 'Doe', 'jaydeep' , '556655')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>