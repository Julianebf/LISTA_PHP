<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <title>Exercicio 11</title>
</head>
<body>
<p>Criar um algoritmos que imprima a tabuada de um número </p>
    <form action="/"  method="post">
		<input type="int" placeholder="digite um numero" name="numero" id="numero">
		<br/>
		<button name="verificar">verificar</button> 
    </form> 
    <?php
       if(isset($_POST['verificar'])){
        $numero = strip_tags(filter_input(INPUT_POST,'numero'));
        for ($i=1; $i<=10; $i++){
            echo "$i * $numero = ".($i * $numero);
            echo "<br><br>";
        }
       }
    ?>
</body>
</html>