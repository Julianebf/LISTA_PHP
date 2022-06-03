<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="/exercicio6/style.css">
    <title>Execicio 6</title>
</head>
<body>
Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja 
fora desse intervalo, informar que não existe mês com este número.
    <form action="/exercicio6/index.php"  method="post">
        <h2>Digite um numero de 1 á 12:</h2>
		<input type="int" placeholder="digite o numero" name="valor" id="valor">
		<br/>
		<button name="verificar">verificar</button> 
    </form> 
    <?php
        if(isset($_POST['verificar'])){
            $valor = strip_tags(filter_input(INPUT_POST,'valor'))
        }
        switch($valor){
            case 1:
                echo 'Janeiro'
                break;
            case 2:
                echo 'Fevereiro'
                break;
            case 3:
                echo 'Março'
                break;
            case 4:
                echo 'Abril'
                break;
            case 5:
                echo 'Maio'
                break;
            case 6:
                echo 'Junho'
                break;
            case 7:
                echo 'Julho'
                break;
            case 8:
                echo 'Agosto'
                break;
            case 9:
                echo 'Setembro'
            case 10:
                echo 'Outubro'
                break;
            case 11:
                echo 'Novembro'
                break;
            case 12;
                echo 'Dezembro'
                break;
            default:
                echo 'Digite um numero de 1 á 12'
        }
    ?>
</body>
</html>