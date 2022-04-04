 <?php

 $str = '<h1>hello world</h1>';

 $str = filter_var($str,FILTER_SANITIZE_STRING); // sanitize a string

 echo $str;
 

 ?>
<br><br>
<?php

$int = 41;

$int1 = filter_var($int,FILTER_VALIDATE_INT); // sanitize integer 
if ($int1) {
 echo 'yes';
} else {
 echo 'no';
}

 

?>






