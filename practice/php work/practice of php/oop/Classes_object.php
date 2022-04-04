<?php

# CLASSES

class Student{

 public $book;
 protected $pen;
 private $bag;


  function  __construct($bag){
  $this->bag = $bag;
   }



     function  set_bookName($book){
         return  $this->name = $book;
     }

     function  set_penColor($pen){
         return  $this->pname = $pen;
     }

     function  bookName(){
        return  $this->name;
     }

    function  bagName(){
       return  $this->bag;
    }

}

# DERIVED CLASSES

 class Pen extends Student {
  

     function penColor(){
         return $this->pname;
     }
 }


# OBJECTS

 $php = new Student('ayush');
  echo $php->bagName();



 $java = new Pen('blue');
 $java->set_penColor('cello');
 echo '<br>' . $java->penColor();



 ?>







