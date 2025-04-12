<?php

//A string is sqencence of characters enclosed in single or double quotes.

echo "hello";
echo " hello ayush";

//Double Quotes & Single Quotes

//$x = "Jhon";
//echo "Hello $x"; // Double quoted string literals perform operations for special characters:

    $x = "Jhon";
    echo 'Hello $x';

    //String Length

    $x = "Hello World!";
    echo strlen($x);
    echo str_word_count($x);
    echo strpos("Hello world", "world");

    //string to convert to uppercase
    $x ="Hello world!";
    echo strtoupper($x);

    //string to convert to lowercase
    $x = "Hello World!";
    echo strtolower($x);

    $x = "hello wordl";
    echo str_replace("World", "Dolly", $x);

    $x= "hello world";
    echo strrev($x);

    $x ="    Hello world!         "; 
    echo trim($x); 

    $x = "Hello World";
    $y = explode(" ",$x);

    print_r($y); // print_r() fucntions is used to print the array in a readable format.

    //String Concatenation

    $x="Hello";
    $y = "World!";

    $z= $x.$y;
    echo $z;

    //we can add character space like this 
    $z = $x." ".$y;
    echo $z;

    //Slicing in strings: substr() can return a range of characters from a string
    //we have to pass the string, starting position and length of the string we want to slice.

    $x = "Hello world!";
    echo substr($x,6,5); // it will return "world"

    //want to slice till end , exclude the lenght parameter
    echo substr($x,6);

    //slice from the end of the string
    //for that you have to use negative indexes to start the slice from the end of the string

    $x ="Hello Ayush";
    echo substr($x,-6,3);

    //the last character of the string can be accessed by using -1 as the starting index.

    //Negative lenght can be used to speify how many characters to omit, starting from the end of the string
    $x ="Hi , how are you?";
    echo substr($x, 5,-3);


    //Escape characters in a string 
    //to insert characters that are illegal in a string use an escape character
    //escape character is a backslash \ followed by the character you want to insert

    //$x = "We are the so-called "Vikings" from the north"; //illegal character, trying to insert string into an string
    echo "We are the so-called \"Vikings\" from the north";








?>