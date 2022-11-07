<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../imagens/logoBravo.png">
    <title>Bravo4Fun</title>
</head>

<body>
    <h1>Excluir o Administrador</h1>

    <?php

    require_once '../BD/database.php';

    //coleta os dados do administrador
    $id = $_GET["id"];

    //Realiza uma Query SQL para buscar o administrador que tenha o email e a senha passado pelo usuario
    $admin = $pdo->query("SELECT * FROM ADMINISTRADOR WHERE ADM_ID=" . $id)->fetch();

    //Se o retorno for vazio (0), então a senha ou email estao incorretos
    $nome = $admin["ADM_NOME"];
    $email = $admin["ADM_EMAIL"];
    ?>
    <Form Action="excluirprocessamento.php?id=<?php echo $id ?>" method="POST">
        <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
        <br>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nome: <?php echo $nome ?></span>
            <input type="hidden" class="form-control" name="nome" value="<?php echo $nome ?>">
        </div>
        Email :
        <input type="text" name="email" value="<?php echo $email ?>">
        <br>
        <input type="submit" value="Excluir">
    </Form>
</body>

</html>
