<?php
    $primeiroValor=$_GET['valor1'];
    $segundoValor=$_GET['valor2'];
    
    $soma = $primeiroValor + $segundoValor;

    if ($soma > 20){
        $total = $soma + 8;
    }
    else{
        $total = $soma - 5;
    }
    print $total;
?>