<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Exercicio3</title>
</head>
<body>
    Entrar com nome, sexo e idade de uma
    pessoa. Se a pessoa for do sexo feminino e
    tiver menos que 25 anos, imprimir nome e a
    a mensagem: ACEITA. Caso contrário,
    imprimir nome e a mensagem: NÃO ACEITA.</p>
    
    <form method="post">
    <h2><center>Informações Pessoais!</center></h2>
    <label>Nome:</label><br/>
    <input type="text" placeholder="Informe seu nome" name="nome" id="name">
    <br/><br/>
    <select name=sexo id="sexo" required>
        <option value="">opcoes</option>
        <option value="F">Feminino</option>
        <option value="M">Masculino</option>
    </select>
    <input type="int" placeholder="Digite sua idade" name="idade" id="number">
    <input type="submit" name="verificar" value="Verificar">
    </form>
    <?php
        $arquivo = 'config.php';
        if(file_exists($arquivo)){
            include 'config.php';
        }
        else{
            echo "file".$arquivo."not folder!";
        }
    ?> 
</body>
</html>