<?php
function divisible($number){
    if ($number % 10 == 0 && $number % 5 == 0 && $number % 2 == 0){
        echo "$number is divisible by 10, 5 and 2!";
    }
    else if ($number % 10 == 0 && $number % 5 == 0){
        echo "$number is divisible by 10 and 5!";
    }
    else if ($number % 10 == 0 && $number % 2 == 0){
        echo "$number is divisible by 10 and 2!";
    }
    else if ($number % 5 == 0 && $number % 2 == 0){
        echo "$number is divisible by 5 and 2!";
    }  
    else if($number % 10 == 0) {
        echo "$number  is divisible by 10!";
    }
    else if($number % 5 == 0){
        echo "$number  is divisible by 5!";
    }
    else if($number % 2 == 0){
        echo "$number  is divisible by 2!";
    }
    else {
        echo "$number  nots divisible by 10 by 5 or by 2!";
    }
}
?>