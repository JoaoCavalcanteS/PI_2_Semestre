<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de Criacao de Administrador</title>
</head>
 <body>
    <h1>Novo adm cadastrado</h1>
    <br>
        Retorne para a lista de administradores
    <br>
    <a href="listaradmins.php">Voltar para a Lista</a>
 </body>
</html> 
<?php
//Dados para conexao ao MySQL
$mysqlhostname= "144.22.244.104";
$mysqlport="3306";
$mysqlusername="Bravo4Fun";
$mysqlpassword="Bravo4Fun";
$mysqldatabase="Bravo4Fun";

//mostra string de conexao ao MySql
$dsn='mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
$pdo= new PDO($dsn, $mysqlusername, $mysqlpassword);

//Captura os valores das variaveis
$nome= $_POST["nome"];
$email= $_POST["email"];
$senha= $_POST["senha"];

//Monta o comando de inserção 
$cmdtext= "INSERT INTO ADMINISTRADOR(ADM_NOME, ADM_EMAIL, ADM_SENHA) VALUES('" . $nome . "','" . $email . "','" . $senha ."')";
$cmd = $pdo->prepare($cmdtext);

//Executa o comando e verifica se teve sucesso
$status = $cmd->execute();
if($status){
    echo "Adm criado com sucesso";
}
else{
    echo "Erro ao inserir";
}
?>