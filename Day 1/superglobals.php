<?php
/*Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
The PHP superglobal variables are:
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION */

//Global Variables : Are variables that can be accessed from any scope
//Variables of the outer most scope are automatically global variables & can be used by any scope eg inside a function
//to use a variable as global scope: defined as global with the 'global' keyword or refer to them by using $GLOBAL syntax

$x =75;
function myFunction(){
    echo $GLOBALS['x'];
}
myFunction();

//lets see if $x is not declared as global

/*$x=80;
function myFunction1(){
    echo $x; //getting error as variable declared outside the fucntion is not accessible isndie a function
}
myFunction1();*/













?>