<?php

# main class
class main
{
    public $name = 'Jaydeep';
    protected $hobby = 'Programming';
    private $programming_language = 'PHP';

    # when we create __construct function, it's automatically called when you create object from class
    function __construct()
    {
        echo "__CONSTRUCT<BR>";
        # you can use property in class and drived class ,without declare like this
        $this->sirName =  'Makwana';
    }

    function name()
    {
        # you can use property in class and drived class ,without declare like this
        $this->age = 22;
        echo  'My Name Is : ' . $this->name . ' ' . $this->sirName . '<br>';
        echo  'My age Is : ' . $this->age . '<br>';
        echo  'My Hobby Is : ' . $this->hobby . '<br>';
        echo  'My Programming Language Is : ' . $this->programming_language . '<br>';
    }

    # when we create __destruct function, it's automatically called at the end of script or script stopped or exited
    function __destruct()
    {
        echo '__Distruct';
    }
}

class drived1 extends main
{

    // function __construct($name){
    //     echo 'drived1 constructor '.$name."<br>";
    // }

    function get()
    {
        echo $this->name . '<br>';
    }

    // function __destruct(){

    //     echo "drived1 destructor <br>";
    // }
}

class drived2 extends drived1
{
    // function __construct($name){
    //     echo 'drived2 constructor '.$name."<br>";
    // }

    // function __destruct(){

    //     echo "drived2 destructor <br>";
    // }

}

$obj1 = new drived2('jay');
$obj1->get();
