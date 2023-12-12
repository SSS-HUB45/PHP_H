<?php

/*
$name = "World";
$age = 23;
$taka = 36.52;
$type = null;
$value = '';

var_dump($name);
var_dump($age);
var_dump($taka);
var_dump($type);
var_dump($value);
*/

// $name1 = "Sirajus";
// $name2 = "Sakib";

// var_dump($name1, $name2);

/*
$name = "Earth";
$uname = strtoupper($name);
// echo 'We\'re living on ' . $name . '.';     //escaping
// echo "\n";
echo "We're living on {$name}\n";     //preferable
echo "We're living on {$uname}\n";
printf("We're living on %s", $name);
*/

// $fname = "Albert";
// $lname = "Einstein";
// printf("%s Name is %s %s", "Full", $fname, $lname);     // %s is a placeholder

$planet1 = "Mercury";
$planet2 = "Jupiter";
echo "The smallest palnet is " . $planet1 . " and the biggest planet is " . $planet2 . "\n";
echo "The smallest palnet is {$planet1} and the biggest planet is {$planet2}\n";
printf("The smallest palnet is %s and the biggest planet is %s \n", $planet1, $planet2);
printf("The smallest palnet is %s and the biggest planet is %s \n", strtoupper($planet1), strrev($planet2));

/*  // Primitive Datatype //
Integer (Int)
Double / Float
Boolean
NULL
String
Array
Object
Resource
*/