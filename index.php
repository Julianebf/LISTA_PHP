<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="icon" href="favicon.png" type="images">
    <link rel="stylesheet" href="style.css">
</head>

    <header>
    <p>Construir um algoritmo que leia 2 números e
    efetue a adição. Caso o valor somado seja
    maior que 20, este deverá ser apresentando
    somando-se a ele mais 8; caso o valor
    somado seja menor ou igual a 20, este deverá
    ser apresentado subtraindo-se 5.</p>
    </header>
    <hr><br/>
    
<body>
    <form action="config.php" method="get" class="calc">
        <fieldset>
            <legend>Computand!</legend>
            <label for="pvalor">Primeiro Valor:</label>
            <input type="int" name="valor1" id="pvalor" placeholder="Informe o Primeiro Valor">
            <label for="svalor">Segundo Valor:</label>
            <input type="int" name="valor2" id="svalor" placeholder="Informe o Segundo Valor">
            <input type="submit" value="Calcular" class="buton"> 
        </fieldset>
    </form>
    
        
</body>
</html>