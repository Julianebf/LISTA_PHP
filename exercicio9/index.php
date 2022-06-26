<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style9.css">
    <title>Exercicio 9</title>
</head>
<body>
    <p>Entrar com o número de vezes que se deseja imprimir a palavra SOL e imprimir<p>
    <form action = "index.php" method="post">
		<input type="int" placeholder="digite o numero" name="numero" id="numero">
		<br/>
		<button name="verificar">verificar</button> 
    </form>  
    <?php
      if(isset ($_POST['verificar'])){
        $numero = strip_tags(filter_input(INPUT_POST,'numero'));
      $i = 1;
      while ($i <= $numero):
          echo "Sol </br>"; 
          $i++;
      endwhile;
      }
    ?>
</body>
</html>