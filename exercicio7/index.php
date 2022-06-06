<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="/exercicio7/style.css">
    <title>Execicio7</title>
</head>
<body>
<p>A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que
será emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo
conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro
o aluno somente 3 dias.</p></br><hr></br>
    <form method="post">
        <label> Livro:
            <input type ="text" placeholder="digite o nome do livro" name = "livro" id="texto1">
        </label>  
        </br> 
        <label> Usuário:
            <select name = usuario id= usuario required>
                <option value = "professor"> Professor</option>
                <option value = "aluno"> Aluno</option>
            </select>  
        </label>
        </br>
        <button name="enviar">Enviar</button> 
        </br>
    </form>
</body>
</html>