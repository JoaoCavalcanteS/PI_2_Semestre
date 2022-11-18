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
    <h1>Processo de Inclusão de Produto</h1>
    <br>
    Retorne para a lista de Eventos
    <br>
    <a href="listaProdutos.php">Voltar para a Lista</a>
</body>

</html>


<?php
//Dados para conexao ao MySQL

require_once '../BD/database.php';


//Captura os valores das variaveis
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$desc = $_POST["desc"];
$descont = $_POST["descont"];
$categoria = $_POST["cat"];
// $produtoA = True;

//Monta o comando de inserção
$cmdtext = "INSERT INTO PRODUTO(PRODUTO_NOME, PRODUTO_DESC, PRODUTO_PRECO, PRODUTO_DESCONTO, CATEGORIA_ID, PRODUTO_ATIVO ) VALUES('" . $nome . "','" . $desc . "'," . $preco . "," . $descont . "," . $categoria . ",1)";
$cmd = $pdo->prepare($cmdtext);



//Executa o comando e verifica se teve sucesso
$status = $cmd->execute();
if ($status) {
    echo "<script> confirm('Evento inserido !'); </script>";
} else {
    echo "<script> confirm('Erro ao inserir!'); </script>";   
}
