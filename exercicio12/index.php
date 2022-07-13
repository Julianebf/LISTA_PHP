<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <title>Exercicio 12</title>
</head>
<body>
    <p> Criar um algoritmos que entre com uma palavra e imprima conforme o exemplo Palavra: sonho
SONHO
SONHO SONHO
SONHO SONHO SONHO
SONHO SONHO SONHO SONHO</p>

    <form action="/"  method="post">
		<input type="text" placeholder="digite uma palavra" name="palavra" id="palavra">
		<br/>
		<button name="verificar">verificar</button> 
    </form>  
    <?php
         if(isset($_POST['verificar'])){
            $palavra = strip_tags(filter_input(INPUT_POST,'palavra'));
            $palavra = " ". strtoupper($palavra);
            for ($i=0; $i<5; $i++){
                for ($j=0; $j < $i; $j++){
                    echo $palavra;
                }
                echo "</br>";
            }
         }
    ?>
</body>
</html>