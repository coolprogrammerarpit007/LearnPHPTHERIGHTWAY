<?php 

// Object Oriented Programming in Php
// A class is template/blueprint for objects.
// An object is called the instance of class.
// When individual object is created, it has all the properties and methods from class but the value for every class will be different for individual objects.
// you can use instanceof keyword to check whether an object is instance of class.
// A constructor function is created to initalize the object's properties upon creation of object.
// Acess Modifiers:-
// There are three access modifiers:

    // public - the property or method can be accessed from everywhere. This is default
    // protected - the property or method can be accessed within the class and by classes derived from that class
    // private - the property or method can ONLY be accessed within the class

// class Fruit{
//     public $name;
//     public $color;

//     function __construct($name,$color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
    
//     public function set_name($name){
//         $this->name = $name;
//     }

//     public function get_name(){
//         return $this->name;
//     }

//     // public methods to set and get the fruit color.

//     public function set_color_name($color){
//         $this->color = $color;
//     }

//     public function get_color_name(){
//         return $this->color;
//     }
// }


// class Fruit {
//     public $name;
//     protected $color;
//     private $weight;
//   }
  
//   $mango = new Fruit();
//   echo $mango->name = 'Mango'; // OK
//   $mango->color = 'Yellow'; // ERROR
//   $mango->weight = '300'; // ERROR

// Creating Objects from fruit class

// $apple = new Fruit('Apple','Red');
// $banana = new Fruit('Banana','Yellow');

// $apple->set_name('Apple');
// echo $apple->get_name() . "<br>";
// $banana->set_name('Banana');
// echo $banana->get_name() . "<br>";

// // Getting the color value of fruit
// $apple->set_color_name('Red');
// echo $apple->get_color_name() . "<br>";
// echo $apple->name . "<br>";
// echo $apple->color . "<br>";


// Inheritance:- When a class is drived from another class
// An Inherited class is defined by using the extends keyword

class Fruit{
    public $name;
    public $color;

    function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        return "Fruit name is {$this->name} and the color is {$this->color}";
    }
    
}

class Strawberry extends Fruit{

    public $weight;

    public function __construct($name,$color,$weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    
    public function berry(){
        return "Am I a fruit or a berry.";
    }
}


$berry1 = new Strawberry('strawberry','pink',38);
echo $berry1->intro() . "<br>";
echo $berry1->berry(). "<br>";
echo $berry1->weight. "<br>";
echo $berry1->name. "<br>";
echo $berry1->color. "<br>";
?>