<?php
    if(isset($_POST['verificar'])){
        $number1 = (filter_input(INPUT_POST, 'number1'));
        $number2 = (filter_input(INPUT_POST, 'number2'));
        $number3 = (filter_input(INPUT_POST, 'number3'));           
    }
    if (($number1<$number2) && ($number2<$number3) && ($number1<$number3)) {
        echo "Em ordem descrecente: $number3, $number2, $number1";
    }
    elseif (($number1<$number3) && ($number3<$number2) && ($number1<$number2)) {
        echo "Em ordem decrescente: $number2, $number3, $number1";
    }
    elseif (($number2<$number1) && ($number1<$number3) && ($number2<$number3)) {
        echo "Em ordem decrescente: $number3, $number1, $number2";
    }
    elseif (($number2<$number3) && ($number3<$number1) && ($number2<$number1)) {
        echo "Em ordem decrescente: $number1, $number3, $number2";
    }
    elseif (($number2<$number1) && ($number3<$number2) && ($number3<$number1)){
        echo "Em ordem decrescente: $number1, $number2, $number3";
    }
    elseif (($number1<$number2) && ($number3<$number2) && ($number3<$number1)) {
        echo "Em ordem decrescente: $number2, $number1,$number3";
    }
?>