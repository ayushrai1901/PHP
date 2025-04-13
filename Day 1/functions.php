<?php
//PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.
//PHP User Defined Functions
//We can create our own functions in php, called user defined functions
//we can create a function by using the function keyword, followed by a name, followed by parentheses () and a block of code
//A function is a block of code that can be reused
//A function will not execute unless it is called
//A function can take parameters (arguments) and return a value

function myMessage(){
    echo "Hello world!";
    echo "<br>";
    echo "This is my first function!";
    echo "<br>";
}//no output until the function is called
myMessage(); //calling the function will execute the code inside the function
//The function is called by using the function name followed by parentheses ()

//PHP Function Arguments
//A function can take parameters (arguments) and return a value
//Information can be passed to functions through arguments. An argument is just like a variable.
//It is a placeholder for the value that will be passed to the function when it is called. The function can then use this value in its code.

function familyName($firstName){
    echo "$firstName Rai.<br>";
}
familyName("Ayush");
familyName("Shivam");
familyName("Nishi");
familyName("Sanya");

//PHP function with two arguments 

function familName1($firstName, $year){
    echo "$firstName Rai, Born in $year <br>";
}

familName1("Ayush", "1999");
familName1("Shivam", "2000");
familName1("Nishi", "2008");


//PHP Deafualt Argument Value
function setHeight($minheight =50){
    echo "The height is : $minheight <br>";
}

setHeight(350); //will overwrite the default value of 50
setHeight(); //will use the default value of 50
setHeight(80);

//PHP Functions - Returning values
//To let a function return a value, use the return statment inside statement
function sum($x,$y){
    $z =$x+$y;
    return $z;
    
}

//echo "5+10 = " .sum(5,10). "<br>"; //will not return anything as we not used return statement in the function
//To return a value from a function, use the return statement inside the function
echo "10+20 = " .sum(10,20). "<br>"; //will return 30 as we used return statement in the function

//PHP Arguments by Reference 
//to turn a function argument into a reference, the '&' operator is used.
//Pass by reference function
function add_five(&$value){
    $value += 5;
}

$num =2;
add_five($num); //will add 5 to the value of num
echo " ".$num."<br>"; //will return 7 as we passed the value by reference

//Variable Number of Arguments
// by using the ... operator, we can pass a unknown number of arguments to a function
function sumMyNubers(...$x){
    $n= 0;
    $len = count($x);
    for($i=0;$i<$len;$i++){
        $n += $x[$i];
    }
    return $n;
}

$a = sumMyNubers(5,2,6,2,7,7);
echo $a;
//You can only have one argument with variable length, and it has to be the last argument.


//PHP Return type declaration
//The strict declaration forces things to be used in the intended way.



?>