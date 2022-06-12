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
        <label> Nome:
            <input type ="text" placeholder="digite o seu nome" name = "nome" id="nome">
        </label> 
        </br>
        <label> Livro:
            <input type ="text" placeholder="digite o nome do livro" name = "livro" id="texto1">
        </label>  
        </br> 
        <label> Usuário:
            <select name = usuario id= usuario required>
                <option value = ""> </option>
                <option value = "professor"> Professor</option>
                <option value = "aluno"> Aluno</option>
                <option value = "outros"> Outros</option>
            </select>  
        </label>
        </br>
        <button name="enviar">Enviar</button> 
        </br>
    </form>
    <?php
	    if(isset ($_POST['enviar'])){
            $nome = strip_tags(filter_input(INPUT_POST,'nome'));
            $livro = strip_tags(filter_input(INPUT_POST, 'livro'));
            $usuario = strip_tags(filter_input(INPUT_POST,'usuario'));

	        switch($usuario){
                case "professor":
                    echo "Professor:$nome </br> Livro:$livro </br> Prazo: Devolver o livro em 10 dias!";
                    break;
                case "aluno":
                    echo "Aluno: $nome </br> Livro: $livro </br> Prazo: Devolver o livro em 3 dias!";
                    break;
                default:
                    echo "O usuario não se enquadra no perfil de usuarios da biblioteca!";
                    break;
            }
        }
    ?>
</body>
</html>