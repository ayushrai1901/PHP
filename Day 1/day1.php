<?php
    //Gloabal & Local Scope
    //A variable decalared outside a function has a global scope & can only be accessed outside the function.
    /*$x =5;
    function globalScope(){
        echo "Variable x inside function is: $x"; // This will cause an error because $x is not defined in this scope
    }

    globalScope();

    echo "Variable x outside function is: $x";

    //A variable declared inside a function has a local scope & can only be accessed inside that function.

    function test(){
        $x =5;
        echo "Variable x inside function is: $x"; // This will work because $x is defined in this scope
    }

    test();
    echo "Variable x outside function is: $x"; // This will cause an error because $x is not defined in this scope
*/

    //The Global Keyword is used to access a global variable from within a function

    $x=5;
    $y =10;

    function myTest(){
        global $x, $y;
        $y= $x+$y;
    }
    myTest();
    echo $y; // This will output 15 because $y is now the sum of $x and $y


    ?>
