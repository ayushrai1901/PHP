<?php
function test(){
        $x =5;
        echo "Variable x inside function is: $x"; // This will work because $x is defined in this scope
    }

    test();
    echo "Variable x outside function is: $x"; // This will cause an error because $x is not defined in this scope