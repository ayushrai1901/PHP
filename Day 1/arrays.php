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

$car = array("brand"=>"Ford", "model"=>"Mustang","year"=>"1696");
$car["color"]="Red";
foreach($car as $value){
    echo "$value <br>";
}

//Add Multiple Items to Associative Arrays
//to add multiple items to an existing array, you can use += operator
$car += ["color"=>"red","year"=>1964];
foreach($car as $value){
    echo "$value <br>";
}

//Remove An Array item
//To remove an existing item from an array, you can use the array_splice() function.
//With the array_splice() function you specify the index (where to start) and how many items you want to delete.
$car = array("Volvo","BMW","Toyota");
array_splice($car,1,1);
var_dump($car);

//We can use unset() function to delete existing array items
//Note: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.

//remove the second item
$car = array("Volvo","BMW","Toyota");
unset($car[1]);
var_dump($car);

//we can use unset() function to delete multiple item from array
unset($car[0],$car[1]);

//we can use array_diff() fuction to remove items from an associative array but this function takes values as parameters not index
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($car,["Mustang",1964]);
var_dump($newarray);

//Remove last item from the array : use array_pop() function
$car =array("BMW","Audi","Volvo");
array_pop($car);
var_dump($car);

//Remove the first Item : use array_shift() function
$car = array("BMW","Audi","Land Cruiser");
array_shift($car);
var_dump($car);

//PHP Sorting Arrays
//The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.
//sort() - sort arrays in ascending order
$car = array("Volvo","BMW","Audi");
sort($car);
$clenght = count($car);
for($i=0; $i<$clenght;$i++){
    echo $car[$i];
    echo "<br";
}

//sorting the numbers
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}

/*
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
*/


?>