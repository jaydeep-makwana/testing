<?php
   class Fruit {
	 public $name;
  public $color;


   function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
    function intro() {
    echo "The fruit is {$this->name} and jaydeep  the color is {$this->color}.";
}
 
}

class Strawberry extends Fruit {
public function info() {
      $this->intro();
     echo "success";
  }
}


class apple extends Strawberry {
    function data(){
        $this->info();
        echo 'apple';
    }
}

$apple = new apple("Strawberry", "red");
$apple->data();


// $Fruit = new Fruit("Strawberry", "red");
// $Fruit->intro();

?>

