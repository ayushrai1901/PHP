<?php
//Constants are like variables except that once they are defined they cannot be changed or undefined.
//A valid constant name starts with a letter  or underscore (not a number) and it can only contain letters, numbers, and

//PHP Constants
//to create a constant, use the define() function. The first parameter is the name of the constant, and the second parameter is the value of the constant.
//define(name, value);

//Parameters:
//name: Specifies the name of the constant. The name must begin with a letter or underscore (not a number).
//value: Specifies the value of the constant. The value cannot be an array, but it can be a string, number, or boolean value

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

//PHP const keyword
const MyCar = "Volvo";
echo MyCar;

//const vs. define()
//const cannot be created inside another block scope, like inside a function or inside an if statement.
//define can be created inside another block scope.

define ("cars",["Alfa Romeo","BMW","Toyota"]);
echo cars[2];

//Constants are Global across the entire script.
//Constants are automatically global and can be used across the entire script.

define("Greetings", "Welcome to Ayush's World!");
function myTest(){
    echo Greetings;
}


?>