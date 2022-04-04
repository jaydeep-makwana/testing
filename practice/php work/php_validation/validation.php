<?php

$userNameErr = $passwordErr = $cPasswordErr = $languageErr = $fNameErr = $mNameErr = $lNameErr = $dobErr = $MUErr = $genderErr = $countryErr = $occupationErr = $mobileNoErr = $emailErr = $fdbErr =  $pincodeErr= $cityErr= $stateErr= $pnErr =  "";

$userName = $password = $cPassword = $language = $fName = $mName = $lName = $dob = $MU = $gender = $country = $occupation = $mobileNo = $email = $fdb = $sl = $al = $pincode = $city = $state = $pn = "";

$success = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $userName = $_POST['userName'];

  
  if (empty($_POST['userName'])) {
    $userNameErr = 'user name requierd';
  }else{
      if(!preg_match("/^[a-zA-Z_]{6,14}$/",$userName)){
        $userNameErr = 'only enter A a _  <br> minimum length 6 and maximum length 14.  ';
        
      }
    }
if(empty($_POST['password'])){
      $passwordErr = 'password required';
    }else{
      $password = $_POST['password'];
      if(!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",$password)){
        $passwordErr = ' required one  Uppercase,Lowercase and number..    <br> minimum length 8 and maximum length 12. ';
        
      }
    }
    
    if(empty($_POST['cPassword'])){
      $cPasswordErr = 'confirm password required';
    }else{
      if($_POST['cPassword'] != $password){
        
        $cPasswordErr = '<br>confirm password is not correct';
      }
    }
    
    if(empty($_POST['language'])){
      $languageErr = 'input language';
      
    }
    if(empty($_POST['firstName'])){
      $fNameErr = 'input first name';
  }else{
    $fName = $_POST['firstName'];
    if(!preg_match("/^[a-zA-Z ]*$/",$fName)){
      $fNameErr = 'only space and Alphabet.';
      
    }
  }
  
  if(empty($_POST['middleName'])){
    $mNameErr = 'input middle name';
    
  }
  if(empty($_POST['lastName'])){
    $lNameErr = 'input last name';
    
  }
  if(empty($_POST['dob'])){
    $dobErr = 'input date of birth';
  }else{
    $age = floor((time() - strtotime($_POST['dob'] ))/31556926); 
    if ($age < 18 ) {
      $dobErr = 'your age is less than 18';
      
    }
  }

    

if(empty($_POST['m'])){
  $MUErr = 'input matirial status';
  
}
if(empty($_POST['g'])){
  $genderErr = 'input gender';
  
}
if(empty($_POST['cn'])){
  $countryErr = 'input contry/nationality';
  
 }
 if(empty($_POST['occupation'])){
   $occupationErr = 'input occupation';
   
  }
  if(empty($_POST['mn'])){
   $mobileNoErr = 'input mobile number';
  }else{
    $mobileNo = $_POST['mn'];
    if (!preg_match("/^[0-9]{10}$/",$mobileNo)) {
      $mobileNoErr = 'incorrect mobile number';
      
    }
  }
   
  if(empty($_POST['email'])){
   $emailErr = 'input email';
  }else {
    $email = ($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
     
   
  if(empty($_POST['fdb'])){
   $fdbErr = 'input floor/door/block No.';
   }else{
    $fdb = $_POST['fdb'];
    if(!preg_match("/^[ a-zA-Z-,\/0-9]{3,250}$/",$fdb)){
      
      $fdbErr = 'minimum 3 letters required';
    }
  }
   
  if(empty($_POST['pincode'])){
   $pincodeErr = 'input pincode';
   
 }
  if(empty($_POST['city'])){
   $cityErr = 'input city';
   
 }
  if(empty($_POST['state'])){
   $stateErr = 'input state';
   
 } 
  if(empty($_POST['pn'])){
   $pnErr = 'input phone number';
  }else{
    $pn = $_POST['pn'];
    if(!preg_match("/^[0-9]{7}$/",$pn)){
      
      $pnErr = 'input at least 7 digit.';
    }
  }
   


} 

  
  


?>









<!-- 
 echo $_POST['userName'];
 echo $_POST['password'];
 echo $_POST['language'];
 echo $_POST['firstName'];
 echo $_POST['middleName'];
 echo $_POST['lastName'];
 echo $_POST['dob'];
 echo $_POST['m'];
 echo $_POST['g'];
 echo $_POST['cn'];
 echo $_POST['occupation'];
 echo $_POST['mn'];
 echo $_POST['email'];
 echo $_POST['fdb '];
 echo $_POST['pincode'];
 echo $_POST['city'];
 echo $_POST['state'];
 echo $_POST['pn']; -->