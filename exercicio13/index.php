<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <title>Exercicio 13</title>
</head>
<body>
    <p> Ler vários números e informar quantos números entre 100 e 200 foram digitados. Se o valor 0 for lido encerrar a execução</p>
    <form action="/"  method="post">
		<input type="int" placeholder="digite os numeros" name="numeros" id="numeros">
		<br/>
		<button name="verificar">verificar</button> 
    </form>
    <?php
        if(isset($_POST['verificar'])){
          $numeros = strip_tags(filter_input(INPUT_POST,'numeros'));
          $cont = array();
          $arr=explode (" ", $numeros);
          foreach($arr as $a){    
            if($numeros >= 100 && $numero <=200){
              $cont[] = $numeros;
            } 
            elseif ($a== 0){
              exit ("ecerrando execução");
            } 
           }
           $count = count($a);
          echo "a quantidade de numeros: $count";

          }

    ?>
</body>
</html>