<?php
//while - loops through a block of code as long as the specified condition is true
//do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
//for - loops through a block of code a specified number of times
//foreach - loops through a block of code for each element in an array

//while loops
$i =1;
while($i<6){
    echo $i;
    echo $i++;
}
//The while loop does not run a specific number of times, but checks after each iteration if the condition is still true.

//with break statement we can stop the loop even if the condition is true

$i=1;
while($i<5){
    echo $i;
    if($i==3) break;
    echo $i;
    $i++;
}


//continue statement
//with continue statement we can skip the current iteration of the loop and continue with the next iteration
$i=1;
while($i<6){
    $i++;
    if($i==3) continue;
    echo $i; 
}


//PHP do...while Loop
//do..while loop execute the code atleast once ,irrespective of the condition is true or false

$i=1;
do{
    echo $i;
    $i++;
}while($i<6);

//for Loops
//The for loop - Loops through a block of code a specified number of times.

/*for (expression1, expression2, expression3) {
  // code block
}
This is how it works:

expression1 is evaluated once
expression2 is evaluated before each iteration
expression3 is evaluated after each iteration*/

for($x=0; $x<=10; $x++){
    echo "The number is: $x <br>";
}

//With the break statement we can stop the loop even if the condition is still true:
    for($x=0;$x<=10;$x++){
        if($x==3)break;
        echo "The number is: $x <br>";
    }

//with the continue statement we can stop the current iteration of the loop & continue with the next iteration
    for($x=0;$x<=10;$x++){
        if($x==3) continue;
        echo "The number is: $x <br>";
    }

//foreach Loop
//The foreach loop - Loops through a block of code for each element in an array or each property in an object.
//The most common use of the foreach loop, is to loop through the items of an array.
 $colors = array("red", "green", "blue", "yellow");
 foreach($colors as $x){
    echo "$x <br>";
 }

 //Keys and Values In array
 //Print both the key and the value from the $members array:

 $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

 foreach($members as $x=>$y){
    echo "$x : $y <br>";
 }
 

?>