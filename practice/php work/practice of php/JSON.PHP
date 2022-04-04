<?php


$age = ["jay" => 21,"amar" =>22];
$agee = '{"jay" :  21,"amar" : 22}';

$a = json_decode($agee);
// echo json_encode($age);
//  var_dump(json_decode($agee));

foreach($a as $key => $value){
    // echo $key.$value;
}


?>

<br><br>


<?php




// $url = "https://jsonplaceholder.typicode.com/users";
$url = "users.json";

 
echo json_decode($url);




?>