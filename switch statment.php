<?php
$age = 39;

switch(true) {
    case ($age >= 15 && $age <=20);
        echo "You are eligible";
        break;

    case ($age >= 21 && $age <=30);
        echo "You are  not eligible";
        break;
        
        case ($age >= 31 && $age <=40);
        echo "You are very eligible";
        break;

        case ($age >= 11 && $age <=15);
        echo "You are  bad eligible";
        break;
    default:
        echo "please enter a age";
        break;
}


?>
