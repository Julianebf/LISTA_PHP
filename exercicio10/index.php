<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <title>Exercicio 10</title>
</head>
<body>
    <p>Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos </p>
    <h3> Digite 20 numeros: </h3>
    <form action="/"  method="post">
		<input type="int" placeholder="digite os numeros" name="numeros" id="numeros"> 
		<br/>
		<button name="verificar">verificar</button> 
    </form>
    <?php
      if(isset($_POST['verificar'])){
        $numeros = strip_tags(filter_input(INPUT_POST,'numeros'));
        $arr = explode (" ", $numeros);
        $positivo = array();
        $negativo = array();

        foreach ( $arr as $a){
          if ($a < 0){
            $negativo[] = $a;
          }
          else{
            $positivo[] = $a;
          }
        }
        $soma = array_sum($positivo);
        $count = count($negativo);
        echo "positivos: $soma </br> negativos: $count";
      }
    ?>
</body>
</html>