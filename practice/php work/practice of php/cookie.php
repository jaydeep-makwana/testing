<?php


 

setcookie("jay", "Coding" , time() + 2  , "/");
 
if (isset($_COOKIE["jay"])) {
 echo $_COOKIE["jay"];
} else {
echo "cookie is not set";
}

echo '<br><br><br>';
if(count($_COOKIE) > 0){
echo '<h1>cookies are Enable';
}else{
 echo 'cookies are disable';
 
}

?>

