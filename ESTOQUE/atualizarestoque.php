<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../imagens/logoBravo.png">
    <title>Bravo4Fun</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <h1>Atualizar Estoque</h1>


    <?php

    //Dados para conexao ao MySQL
    $mysqlhostname = "144.22.244.104";
    $mysqlport = "3306";
    $mysqlusername = "Bravo4Fun";
    $mysqlpassword = "Bravo4Fun";
    $mysqldatabase = "Bravo4Fun";

    //mostra string de conexao ao MySql
    $dsn = 'mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
    $pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);

    //Captura os valores das variaveis
    $nomeId = $_POST["nomeId"];
    $desc = $_POST["Quantidade"];

    // requisição do cliente!
    $id = $_POST["nomeId"];

    //Monta o comando de update!
    $cmdtext = "UPDATE PRODUTO_ESTOQUE set PRODUTO_QTD = '$desc' where PRODUTO_ID=  $id";
    $cmd = $pdo->prepare($cmdtext);

    //Executa o comando e verifica se teve sucesso
    $status = $cmd->execute();
    if ($status) {
        header("Location:estoque.php");
        echo "<script>Alert('Categoria atualizadas')</script>";
    } else {
        echo "<script>Alert('Erro')</script>";
    }

    ?>
    <a href="listaCategoria.php">Voltar para a Pagina de Lista</a>

</body>

</html>