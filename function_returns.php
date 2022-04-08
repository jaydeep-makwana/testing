<?php

include("demo.php");
require('demo.php');
# True = 1
# False = error (failed to open and No such file or directory)

isset($a);
# True = 1
# False = nothing

date('Y');
time();
# date() nedded atleast one parameter
# True = Return date and time
# False = error "if you set wrong parameter"

file_get_contents('demo.txt');
# True = Return data of file
# False = error (failed to open and No such file or directory)

json_decode(file_get_contents('demo.txt'),true);
# True = Return contents of file  
# False = error (failed to open and No such file or directory)


# True = 
# False = 


# True = 
# False = 


# True = 
# False = 


# True = 
# False = 


# True = 
# False = 
 






 // MYSQLI FUNCTION 
 
 mysqli_connect('localhost', 'root', '','mydb');
 # True = Return Mysqli array
 # False = Warning error
 
 mysqli_select_db($conn,"mydb");
 # True = 1
 # False = Nothing or error if connection is not proper defined
 
 mysqli_query($conn,$createDB);
 # True = Nothing
 # False = Warning error
 
 mysqli_fetch_assoc($result);
 # True = Return array of resords from database
 # False = 
 
 
 # True = 
 # False = 
 
 
 # True = 
 # False = 
 
 
 # True = 
 # False = 
 
 
 # True = 
 # False = 
 
 
 # True = 
 # False = 

























































