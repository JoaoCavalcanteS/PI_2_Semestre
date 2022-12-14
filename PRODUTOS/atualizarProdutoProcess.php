<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../imagens/logoBravo.png">
    <title>Bravo4Fun</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <h1>Atualizar Eventos</h1>


    <?php

    //Dados para conexao ao MySQL
    require_once '../BD/database.php';
    $id = $_GET["id"];

    //Captura os valores das variaveis
    $nome = $_POST["nome"];
    $categoria = $_POST["cat"];
    $preco = $_POST["preco"];
    $desc = $_POST["descricao"];
    $desconto = $_POST["desconto"];


    //Monta o comando de update!
    $cmdtext = "UPDATE PRODUTO set PRODUTO_NOME = '$nome', PRODUTO_DESC = '$desc', PRODUTO_PRECO = '$preco', PRODUTO_DESCONTO = '$desconto', CATEGORIA_ID = '$categoria' WHERE PRODUTO_ID=" . $id;
    $cmd = $pdo->prepare($cmdtext);

    //Executa o comando e verifica se teve sucesso
    $status = $cmd->execute();
    if ($status) {
        echo "<script>confirm('Evento Atualizado!');</script>";
        header("Location: listaProdutos.php");
    } else {
        echo "<script>confirm('Erro ao atualizar!');</script>";
        header("Location: atualizarProduto.php");
    }

    ?>
    <a href="listaProdutos.php">Voltar para a Lista</a>

</body>

</html>