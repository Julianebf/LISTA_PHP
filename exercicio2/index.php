<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel = "stylesheet" href="style2.css">
    <title>Exercicio 2</title>
</head>
<body>
    <header>
        Entrar com um número e informar se ele é
        divisível por 10, por 5, por 2 ou se não é
        divisível por nenhum destes.
    </header>
    <hr><br>
    <?php include "ex2back.php"?>
    <form  method="post">
        <div class="form">
        <h3>calculate:</h3>
        <input type="int" placeholder="Enter number" name="number" id="number">
        <br/> <br/>
        <button name="send">verify</button>
        </div>

    </form>

    <?php
        if(isset($_POST['send'])){
            $number = strip_tags(filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRIPPED));
            
            echo divisible($number);
        }      
    ?>
</body>
</html>

