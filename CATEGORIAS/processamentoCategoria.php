<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../imagens/logoBravo.png">
    <title>Bravo4Fun</title>
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
require_once '../BD/database.php';

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