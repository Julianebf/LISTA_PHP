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
    <form action = "index.php" method="post">
        <div class="form">
        <h3>Order</h3>
        <input type="int" placeholder="Enter number1" name="number1" id="number1">
        <br/> <br/>
        <input type="int" placeholder="Enter number2" name="number2" id="number2">
        <br/> <br/>
        <input type="int" placeholder="Enter number3" name="number3" id="number3">
        <br/> <br/>
        <input type="submit" name="verificar" value="Verificar">
        </div>
    </form>
    <?php
        if(isset($_POST['verificar'])){
            $number1 = strip_tags(filter_input(INPUT_POST, 'numero1'));
            $number2 = strip_tags(filter_input(INPUT_POST, 'numero2'));
            $number3 = strip_tags(filter_input(INPUT_POST, 'numero3'));
            if (($numero1<$numero2) && ($numero2<$numero3) && ($numero1<$numero3)) {
                echo "Em ordem descrecente: $numero3, $numero2, $numero1";
            }
            elseif (($numero1<$numero3) && ($numero3<$numero2) && ($numero1<$numero2)) {
                echo "Em ordem decrescente: $number2, $number3, $number1";
            }
            elseif (($numero2<$numero1) && ($numero1<$numero3) && ($numero2<$numero3)) {
                echo "Em ordem decrescente: $numero3, $numero1, $numero2";
            }
            elseif (($numero2<$numero3) && ($numero3<$numero1) && ($numero2<$numero1)) {
               echo "Em ordem decrescente: $numero1, $numero3, $numero2";
            }
            elseif (($number2<$number1) && ($number3<$number2) && ($number3<$number1)){
                echo "Em ordem decrescente: $number1, $number2, $number3";
            }
            elseif (($number1<$number2) && ($number3<$number2) && ($number3<$number1)) {
               echo "Em ordem decrescente: $number2, $number1,$number3";
            }
            else {
                echo "Informe numeros diferentes";
            }
        }
    ?>
</body>
</html>