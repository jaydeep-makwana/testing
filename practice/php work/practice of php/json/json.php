<?php

$URL = 'https://jsonplaceholder.typicode.com/users';

$file_content = file_get_contents($URL);    # get contents of file/url/upi 
 
$decode = json_decode($file_content,true);   # convert data from json object to php object


 function Id() {

     global $decode;
     
     foreach($decode as $value){
         
         echo '<tr><td>'.$value['id'].'</td></tr>';

        }
        
          }
 

 function Name() {
     global $decode;
         
     foreach($decode as $value){
         
        echo '<tr><td>'.$value['name'].'</td></tr>';

        }
         
 }
 
 function User_Name() {
     global $decode;
          
     foreach($decode as $value){

        echo '<tr><td>'.$value['username'].'</td></tr>';

        }
         
 }

 function Email() {

     global $decode;
          
     foreach($decode as $value){
         
        echo '<tr><td>'.$value['email'].'</td></tr>';
        
        }
         
 }


 function Street() {

     global $decode;
          
     foreach($decode as $value){
         
        echo '<tr><td>'.$value['address']['street'].'</td></tr>';
        
        }
         
 }


 function Suite() {

     global $decode;
          
     foreach($decode as $value){
         
        echo '<tr><td>'.$value['address']['suite'].'</td></tr>';
        
        }
         
 }


 function city() {

     global $decode;
          
     foreach($decode as $value){
         
        echo '<tr><td>'.$value['address']['city'].'</td></tr>';
        
        }
         
 }


 function Zipcode() {

     global $decode;
          
     foreach($decode as $value){
         
        echo '<tr><td>'.$value['address']['zipcode'].'</td></tr>';
        
        }
         
 }


 function Latitude() {

     global $decode;
          
     foreach($decode as $value){
         
        echo '<tr><td>'.$value['address']['geo']['lat'].'</td></tr>';
        
        }
         
 }


 function Longitude() {

     global $decode;
          
     foreach($decode as $value){
         
        echo '<tr><td>'.$value['address']['geo']['lng'].'</td></tr>';
        
        }
         
 }


 function Phone() {

     global $decode;
          
     foreach($decode as $value){
         
        echo '<tr><td>'.$value['phone'].'</td></tr>';
        
        }
         
 }


 function Website() {

     global $decode;
          
     foreach($decode as $value){
         
        echo '<tr><td>'.$value['website'].'</td></tr>';
        
        }
         
 }


 function Website_Name() {

     global $decode;
          
     foreach($decode as $value){
         
        echo '<tr><td>'.$value['company']['name'].'</td></tr>';
        
        }
         
 }


 function Catchphrase() {

     global $decode;
          
     foreach($decode as $value){
         
        echo '<tr><td>'.$value['company']['catchPhrase'].'</td></tr>';
        
        }
         
 }


 function Bs() {

     global $decode;
          
     foreach($decode as $value){
         
        echo '<tr><td>'.$value['company']['bs'].'</td></tr>';
        
        }
         
 }




?>
