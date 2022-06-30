<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel = "stylesheet" href="style.css">
   <title>Exercicio 8</title>
</head>
<body>
   <p>Criar um algoritmos que leia um número e imprima todos os número de 1 até ele e o seu produto.</p> <hr> </br>
   <form method = "post">
       <input type = "int" placeholder = "Digite um numero" name = "numero" id = numero>  </input> <br>
       <button name = enviar>Enviar</button>
   </form>
   <?php
   if(isset($_POST['enviar'])){
       $numero = strip_tags(filter_input(INPUT_POST,'numero'));
       for ($i=1; $i <= $numero; $i++){
           echo " $i ";
       }
       function produto($numero){
           $cont =1;
           for($j=1; $j <=$numero; $j++){
               $cont *=$j;
           }
           return $cont;
       }
       $result = produto($numero);
           echo  " = $result";
       }
   ?>
</body>
</html>