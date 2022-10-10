<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo de Criação de categoria</title>
</head>
 <body>
    <h1>Cadastro de Categoria</h1>
    <br>
        Retorne para a lista de categoria
    <br>
    <a href="listaCategoria.php">Voltar para a Lista</a>
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
$categoria= $_POST["categoria"];
$desc= $_POST["desc"];

//Monta o comando de inserção 
$cmdtext= "INSERT INTO CATEGORIA(CATEGORIA_NOME, CATEGORIA_DESC) VALUES('" . $categoria . "','" . $desc . "')";
$cmd = $pdo->prepare($cmdtext);

//Executa o comando e verifica se teve sucesso
$status = $cmd->execute();
if($status){
    echo "Categoria criado com sucesso";
}
else{
    echo "Erro ao inserir";
}
?>