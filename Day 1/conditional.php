<?php
//PHP Conditional Statements
// syntax of if statement is: if(condition) { //code to be executed if condition is true }
// if(condition) { //code to be executed if condition is true } else { //code to be executed if condition is false }

if(5>3){
    echo "Have a good day";
}

$t=10;
if($t<20){
    echo "Have a good day";
}
?>

<?php



//Comparison Operators
//If statement usually contains conditions that compare two values
$k =14;
if($k==14){
    echo "Have a good day & keep learning PHP";
}
?>

<?php
//The if..else statement is used to execute a block of code if a specified condition is true, and another block of code if the condition is false.
$t =date(format: "H");
if($t<20){
    echo "Have a good day";
}else{
    echo "Have a good night";
}

?>

<?php
//PHP Nested if statement

// if statement inside another if statement is called nested if statement

$a =13;
if($a>10){
    echo "Above 10";
    if($a>20){
        echo " and also above 20";
    }else{
        echo "but not above 20";
    }
}
?>