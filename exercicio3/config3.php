<?php
    if(isset($_POST["verificar"])){
        $nome = filter_input(INPUT_POST, 'nome');
        $sexo = filter_input(INPUT_POST, 'sexo');
        $idade = filter_input(INPUT_POST, 'idade');
    }
    if(empty($nome) && empty ($sexo) && empty ($idade)){
        echo '<p> preencha';
    }
    elseif($_POST["sexo"] == "F" && $_POST["idade"] < 25 ){
        echo " ACEITA";
    }
    else{ 
        echo " NÃO ACEITA";
    }
?>
