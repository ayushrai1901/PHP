<?php
//PHP Numbers
//3 main numeric types in PHP
//Integer
//Float
//Number String

//PHP has two more data types
//Infinity
//NaN

//Variables of numeric types are created when we assign a value to them

$a =5; //Integer
$b =5.34; //float
$c ="25"; //String

echo var_dump($a);
echo var_dump($b);
echo var_dumP($c);

//PHP NaN
//NaN stands for Not a Number
$x = acos(8);
echo var_dump($x);

//PHP Numerical Strings
// is_numeric() function is used to check if a variable is numeric or not

$x = 5895;
var_dump(is_numeric($x)); //it will return true

$x ="5895";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x ="Hello";
var_dump(is_numeric($x)); // it will return false

//PHP Castings Strings & Floats to Integers
// (int), (integer), (intval) are used to convert a variable to an integer

$x = 2365.23365;
$int_cast = (int)$x;

echo $int_cast; // it will return 2365

$x = "866.23365";
$int_cast = (int)$x;
echo $int_cast;

/*
Change Data Type
Casting in PHP is done with these statements:

(string) - Converts to data type String
(int) - Converts to data type Integer
(float) - Converts to data type Float
(bool) - Converts to data type Boolean
(array) - Converts to data type Array
(object) - Converts to data type Object
(unset) - Converts to data type NULL
*/

//Cast to String
$a = 5; //Integer
$b = 5.34; //float
$c = "Hello"; //string
$d = true; //boolean
$e = NULL; //Null

$a = (string)$a; //Convert to string
$b = (string)$b; //Convert to string
$c = (string)$c;
$d = (string)$d;
$e = (string)$e;

var_dump($a); // it will return string(1) "5"
var_dump($b); // it will return string(4) "5.34"
var_dump($c); // it will return string(5) "Hello"
var_dump($d); // it will return string(1) "1"
var_dump($e); // it will return string(0) ""

//Cast to Integer
$a= 5; //Integer
$b = 5.34; //float
$c = "Hello"; //string
$d = true; //boolean
$e = NULL; //Null

//Cast to float
$a = (float)$a;
$b = (float)$b;

//Cast to boolean
$c = (bool)$c;

//If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true.
//Even -1 converts to true.

//Cast to Array
$f = "hello";
$f = (array)$f; //Convert to array


class Car{
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "My car is a " .$this->color ." ".$this->model ."!";
    }
}

$myCar = new Car("red", "Volvo");

$myCar =(array)$myCar; //Convert to array
var_dump($myCar); // it will return array(2) { ["color"]=> string(3) "red" ["model"]=> string(5) "Volvo" }

//Cast to Object
$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

$a = (object) $a;
$b = (object) $b;





?>