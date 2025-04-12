<?php
//The switch statement is used to perform different actions based on different conditions

//PHP switch statement 
//Use the switch statement to select one of many blocks of code to be executed.
$favcolor ="red";
switch($favcolor){
    case "red":
    echo "Your favorite color is red!";
    break;
    case "blue":
    echo "Your favorite color is blue!";
    break;
    case "green":
    echo "Your favorite color is green!";
    break;
    default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>


<?php
//The Break Keyword
//When PHP reaches a break keyword, it breaks out of the switch block.

//What happens if we remove the break statement from case "red"?
//The code will continue executing the next case until it reaches a break statement or the end of the switch block.
$favcolor ="red";
switch($favcolor){
    case "red":
        echo "Your favorite color is red!";
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
    echo "Your favorite color is neither red, blue, nor green!";   
}

?>

<?php
//The Default Keyword
//The defualt keyword specifies a block of code to be executed if no case is matched.
$d =4;
switch($d){
    case 6:
        echo "Today is Saturday!";
        break;
    case 0:
        echo "Today is Sunday!";
        break;
    default:
    echo "Looking forward to the Weekend!";
}
?>