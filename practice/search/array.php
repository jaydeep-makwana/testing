<?php

$a  = ["jay", "krisha", "priya"];

$q = $_GET["q"];

$hint = "";


if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
      if (stristr($q, substr($name, 0, $len))) {
        if ($hint === "") {
          $hint = $name;
        } else {
          $hint .= ", $name";
        }
      }
    }
  }

 if($hint == ""){
     echo 'not found';

 }else{
     echo $hint;
 }





  ?>