<?php
function divisible($number){
    if($number % 10 == 0) {
        echo "$number O numero é divisivel por 10!";
    }
    else if($number % 5 == 0){
        echo "$number O numero é divisivel por 5!";
    }
    else if($number % 2 == 0)
        echo "$number O numero é divisivel por 2!";
    }
    return divisible($number)
?>
