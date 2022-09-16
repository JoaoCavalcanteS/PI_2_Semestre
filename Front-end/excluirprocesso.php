<?php
//Dados para conexao ao MYSQL
$mysqlhostname = "144.22.231.213";
$mysqlport = "3306";
$mysqlusername = "usuarios";
$mysqlpassword = "Senac@1976";
$mysqldatabase = "meubanco";

//MOSTRA a string de conexao ao MYSQL
$dsn = 'mysql:host=' . $mysqlhostname . ';dbname=' . $mysqldatabase . ';port=' . $mysqlport;
$pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);

//CAPTURA o post do usuario

$email = $_POST["email"];
$senha = $_POST["senha"];
?>