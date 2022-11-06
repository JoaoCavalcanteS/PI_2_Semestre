<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo de Inclusão de Produto</title>
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

//Captura os valores das variaveis
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$precoInt = intval($preco);
$desc = $_POST["desc"];
$descont = $_POST["descont"];
$descontInt = intval($descont);
$categoria = $_POST["cat"];
$categoriaInt = intval($categoria);

//Monta o comando de inserção
$cmdtext = "INSERT INTO PRODUTO(PRODUTO_NOME, PRODUTO_DESC, PRODUTO_PRECO, PRODUTO_DESCONTO, CATEGORIA_ID, PRODUTO_ATIVO ) VALUES('" . $nome . "','" . $desc . "'," . $precoInt . "," . $descontInt . "," . $categoria . ",1)";
$cmd = $pdo->prepare($cmdtext);

//Executa o comando e verifica se teve sucesso
$status = $cmd->execute();
if ($status) {
    echo "Produto criado com sucesso";
} else {
    echo "Erro ao inserir";
}
?>