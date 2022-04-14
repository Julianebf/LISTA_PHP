<?php
    $primeiroValor=$_POST['valor1'];
    $segundoValor=$_POST['valor2'];
    $soma = $primeiroValor + $segundoValor;

    if ($soma > 20){
        $total = $soma + 8;
    }
    else{
        $total = $soma - 5;
    }
?>