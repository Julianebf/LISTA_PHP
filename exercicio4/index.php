<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style4.css">
    <title>Exercicio 4</title>
</head>
<body>
Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)
    <form action = "/exercicio4/index.php" method="post">
        <div class="form">
        <input type="int" placeholder="Escreva o primeiro valor" name="numero1" id="numero1">
        <br/> <br/>
        <input type="int" placeholder="Escreva o segundo valor" name="numero2" id="numero2">
        <br/> <br/>
        <input type="int" placeholder="Escreva o terceiro valor" name="numero3" id="numero3">
        <br/> <br/>
        <input type="submit" name="verificar" value="Verificar">
        </div>
    </form>
    <?php
        if(isset($_POST['verificar'])){
            $number1 = strip_tags(filter_input(INPUT_POST, 'numero1'));
            $number2 = strip_tags(filter_input(INPUT_POST, 'numero2'));
            $number3 = strip_tags(filter_input(INPUT_POST, 'numero3'));
            if (($numero1<$numero2) && ($numero2<$numero3) && ($numero1<$numero3)){
                echo "Em ordem descrecente: $numero3, $numero2, $numero1";
            }
            elseif (($numero1<$numero3) && ($numero3<$numero2) && ($numero1<$numero2)){
                echo "Em ordem decrescente: $numero2, $numero3, $numero1";
            }
            elseif (($numero2<$numero1) && ($numero1<$numero3) && ($numero2<$numero3)){
                echo "Em ordem decrescente: $numero3, $numero1, $numero2";
            }
            elseif (($numero2<$numero3) && ($numero3<$numero1) && ($numero2<$numero1)){
               echo "Em ordem decrescente: $numero1, $numero3, $numero2";
            }
            elseif (($numero2<$numero1) && ($numero3<$numero2) && ($numero3<$number1)){
                echo "Em ordem decrescente: $numero1, $numero2, $numero3";
            }
            elseif (($numero1<$numero2) && ($numero3<$numero2) && ($numero3<$numero1)){
               echo "Em ordem decrescente: $numero2, $numero1,$numero3";
            }
            else {
                echo "Informe numeros diferentes";
            }
        }
    ?>
</body>
</html>