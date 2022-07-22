<?php
$hostname = "localhost:3306";
$username = "root";
$password = "password";
$dbname = "exercicio14";

$connect = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Erro na conexão: " .mysqli_connect_error();
endif;
