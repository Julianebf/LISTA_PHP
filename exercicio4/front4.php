<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style4.css">
    <title>Exercicio4</title>
</head>
<body>
Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)
    <form  method="post">
        <div class="form">
        <h3>Order</h3>
        <input type="int" placeholder="Enter number1" name="number1" id="number1">
        <br/> <br/>
        <input type="int" placeholder="Enter number2" name="number2" id="number2">
        <br/> <br/>
        <input type="int" placeholder="Enter number3" name="number3" id="number3">
        <br/> <br/>
        <button name="verify">verify</button>
        </div>
    </form>

    <?php
        if(isset($_POST['verify'])){
            $number1 = strip_tags(filter_input(INPUT_POST, 'number1', FILTER_SANITIZE_STRIPPED));
            $number2 = strip_tags(filter_input(INPUT_POST, 'number2', FILTER_SANITIZE_STRIPPED));
            $number3 = strip_tags(filter_input(INPUT_POST, 'number3', FILTER_SANITIZE_STRIPPED));
        }
    ?>
</body>
</html>