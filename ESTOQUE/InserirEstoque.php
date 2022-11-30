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
    <h1>Cadastro de ESTOQUE</h1>
    <br>
        Retorne para a lista de ESTOQUE
    <br>
    <a href="estoque.php">Voltar para a Lista</a>
 </body>
</html> 
<?php
//Dados para conexao ao MySQL
require_once '../BD/database.php';

//Captura os valores das variaveis
$id= $_POST["id"];
$desc= $_POST["qtd"];

//Monta o comando de inserção 
$cmdtext= "INSERT INTO PRODUTO_ESTOQUE(PRODUTO_ID, PRODUTO_QTD) VALUES('" . $id . "','" . $desc . "')";
$cmd = $pdo->prepare($cmdtext);

//Executa o comando e verifica se teve sucesso
$status = $cmd->execute();
if($status){
    header("Location:estoque.php");
        echo "<script>Alert('Estoque Adicionado com sucesso')</script>";
}
else{
    echo "Erro ao inserir";
}
?>