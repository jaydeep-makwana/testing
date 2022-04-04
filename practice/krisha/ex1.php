<?php
$txt = "W3Schools.com";
echo "I love $txt!";

$x=10 ;
$y=10;

function ex(){
 global $x,$y;
 $y=$x+$y;
 static $a=10;
 static $b=10;
 $c=$a+$b;
 $a++;
 $b++;
 echo"<br>addition of two no is $c";
}

//echo"<br>$y";
ex();
ex();
ex();

echo"<br>$y";

//object
class Car {
 public $color;
 public $model;
 public function __construct($color, $model) {
   $this->color = $color;
   $this->model = $model;
 }
 public function message() {
   return "My car is a " . $this->color . " " . $this->model . "!";
 }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
//var_dump($myCar);
$myCar = new Car("red", "Toyota");
echo $myCar -> message();

class test{
 public $name;
  public function __construct($name){
   $this->name=$name;
  }
  public function myname(){
   return "my name is" .' ' . $this->name ;
  }
}

$myself= new test("rinku");
echo"<br>";
echo $myself->myname();
?>