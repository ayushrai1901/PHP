<?php
//An array stores multiple values in one single variables.
$car = array("Volve", "Toyota","BMW", "Honda", "Mercedes");
//we can access the value by using the index of the array

//Arrays items: Array items can be of any data type, such as string, integer, object, function, etc.
$myArr = array("Ayush", 20,5.5, true, ["Hello", "World"]);

//Arrays Functions
//count() function: it returns the number of elements/items in an array
$car = array("Volve", "Toyota","BMW", "Honda", "Mercedes");
echo count($car)."<br>"; 

//PHP Indexed Arrays
$car = array("Volve", "Toyota","BMW", "Honda", "Mercedes");
echo var_dump($car)."<br>";
echo $car[1]."<br>"; 

//change value of array
$car = array("Volve", "Toyota","BMW", "Honda", "Mercedes");
$car[1]="Ford"; //change the value of index 1 to Ford
var_dump($car)."<br>"; 

//Loop through an indexed array
$car = array("Volve", "Toyota","BMW", "Honda", "Mercedes");
array_push($car, "Ford"); //add Ford to the end of the array
foreach($car as $value){
    echo "<br> $value <br>";
}

//PHP Associative Arrays
//Associative arrays are arrays that use named keys that you assign to them
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo var_dump($car)."<br>"; //will return the array with keys and values

//Access Associative arrays
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["brand"]."<br>"; //will return Ford as we used the key brand to access the value

//Change Value of Associative arrays
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"]=2024;
var_dump($car)."<br>"; //will return the array with the updated value of year as 2024

//Loop Through an Associative Array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
foreach($car as $x=>$y){
    echo "<br> $x:$y <br>"; //will return the key and value of the array
}


//PHP Creates Arrays
//we can create an array by using the array() function or by using the [] operator

$car = ["Volve", "Toyota","BMW", "Honda", "Mercedes"];
foreach($car as $value){
    echo "$value <br>"; 
}

//comma after the last value in an array is allowed in PHP

//Add Array item
//to add item to an array we can use the bracket notation[] or the array_push() function
$fruit = array("apple","banana","orange");
$fruit [] ="Kiwi";
echo $fruit[3]."<br>";

//Associative array
$car = array("brand"=>"Ford", "model"=>"Mustang","year"=>1964);
$car["color"] ="green";
foreach($car as $value){
    echo "$value <br>";
}


?>