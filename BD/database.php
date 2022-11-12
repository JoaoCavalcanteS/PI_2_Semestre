<?php
$mysqlhostname = "144.22.244.104";
$mysqlport = "3306";
$mysqlusername = "Bravo4Fun";
$mysqlpassword = "Bravo4Fun";
$mysqldatabase = "Bravo4Fun";

//mostra string de conexao ao MySql
$dsn = 'mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
$pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);
// $id = $_GET["id"];
?>