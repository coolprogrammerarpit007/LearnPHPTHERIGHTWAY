<?php

// $firstName = 'Arpit';
// echo "Hello {$firstName}";
// echo 'Hello ' . $firstName;

// Constants and variable variables

// There are two ways to define constants in php

// 1. Using define()
// 2. Using const keyword

// using define keyword

// define('PI',3.14728);
// echo PI;

// const Value = 3.14728;
// echo "Value: ". Value;

// difference b/w const and define is that variables created using define are created during runtime where as const are at compile time, so variables created define can be used in control structure where as variables created using const cannot.

// dynamic constants

// $paid = 'PAID';

// define('STATUS_'.$paid,'PAID ITEM');
// echo STATUS_PAID;


// Magical constants are constants which gives values depending on where are they used.

// Variable Variables.

// $foo = 'bar';
// $$foo = 'baz';

// echo $$foo;