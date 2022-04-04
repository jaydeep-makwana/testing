 <?php

  $file = 'jay.txt';
  $file2 = 'jaydeep.txt';
 
  $myFile = fopen("jaydeep.txt","a") or die ("unable to open"); 
  
  $read = fread($myFile,filesize($file2));

   

  fclose($myFile);


?>
 