<?php 

// Object Oriented Programming in Php
// A class is template/blueprint for objects.
// An object is called the instance of class.
// When individual object is created, it has all the properties and methods from class but the value for every class will be different for individual objects.
// you can use instanceof keyword to check whether an object is instance of class.
// A constructor function is created to initalize the object's properties upon creation of object.

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


?>