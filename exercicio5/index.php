<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="exercicio5/style.css">
    <title>Exercicio 5</title>
</head>
<body>
Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de 
acordo com tamanho dos lados.
    <form  action="index.php" method="post">
        <div class="form">
        <h3></h3>
        <input type="int" placeholder="Primeiro numero" name="numero1" id="numero1">
        <br/> <br/>
        <input type="int" placeholder="Segundo numero" name="numero2" id="numero2">
        <br/> <br/>
        <input type="int" placeholder="Terceiro numero" name="numero3" id="numero3">
        <br/> <br/>  
        <button name="verificar">verificar</button>     
        </div>
    </form>
    <?php
        if(isset($_POST['verificar'])){
            $numero1 = strip_tags(filter_input(INPUT_POST, 'numero1'));
            $numero2 = strip_tags(filter_input(INPUT_POST, 'numero2'));
            $numero3 = strip_tags(filter_input(INPUT_POST, 'numero3'));           
        }

        if(($numero1==$numero2) && ($numero2==$numero3) && ($numero1==$numero3)){
            echo "O triangulo tem todos os lados com a mesma medida, classificado como: Equilatero";
        }
        elseif(($numero1!=$numero3) && ($numero1!=$numero2) && ($numero2!=$numero3)){
            echo "O triangulo tem todos os lados com medidas diferentes, classificado como: Escaleno";
        }
        else{
            echo "O triangulo tem dois lados com a mesma medida e um lado com a medida diferente classificado como: Isosceles";
        }   
    ?>
</body>
</html>