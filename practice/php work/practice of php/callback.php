<?php



$Arr = ['jay',12,true,0.25];


function my_fun($len) {

    return strlen($len);

}

$map = array_map("my_fun",$Arr);   # find length of array's items..

  

echo "<pre>";
print_r($map);
echo "<pre>";





?>