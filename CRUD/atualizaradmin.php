<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../imagens/logoBravo.png">
    <title>Bravo4Fun</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
        background: #000000;
    }

    .cadastrar-se {
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        background: black;
        box-shadow: 0 0 2rem red;
        border: 1px solid red;
        border-bottom: 10px solid red;
    }

    .cadastrar-se h1 {
        text-align: center;
        padding: 0 0 20px 0;
        margin: 10px 0;
        color: red;
        border-bottom: 1px solid red;
    }

    .cadastrar-se form {
        padding: 0 40px;
        box-sizing: border-box;
    }

    form .cadastro {
        position: relative;
        border-bottom: 2px solid #126E82;
        margin: 30px 0;
    }

    .cadastro input {
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        color: #126E82;
        border: none;
        background: none;
        outline: none;
    }

    .cadastro label {
        position: absolute;
        top: 50%;
        left: 5px;
        color: #126E82;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
        transition: .5s;
    }

    .cadastro span::before {
        content: '';
        position: absolute;
        top: 40px;
        left: 0;
        width: 0%;
        height: 2px;
        transition: .5s;
    }

    .cadastro input:focus~label,
    .cadastro input:valid~label {
        top: -5px;
        color: red;
    }

    .cadastro input:focus~span::before,
    .cadastro input:valid~span::before {
        width: 100%;
    }

    input[type="submit"] {
        width: 100%;
        height: 50px;
        border: 1px solid;
        background: red;
        font-size: 18px;
        color: white;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        margin: 15px 0;
    }

    input[type="submit"]:hover {
        border-color: #126E82;
        transition: .5s;
    }

    input[type="button"] {
        position: relative;
        left: 25%;
        width: 50%;
        height: 50px;
        border: 1px solid;
        background: red;
        font-size: 18px;
        color: white;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        margin: 10px 0;
    }

    input[type="button"]:hover {
        border-color: #126E82;
        transition: .5s;
    }

    .logo {
        position: absolute;
        top: -4%;
        left: 41%;
        max-width: 300px;
        max-height: 300px;
        width: auto;
        height: auto;
    }

    ::-webkit-scrollbar {
        height: 5px;
        width: 5px;
    }

    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px red;
    }

    ::-webkit-scrollbar-thumb {
        box-shadow: inset 0 0 6px red;
    }
</style>

<body>
    <header>
        <img src="../Imagens/logoBravo.png" alt="LogoMarca" class="logo">
    </header>
    <div class="cadastrar-se">
        <h1> Atualizar Adm </h1>
        <?php
        require_once '../BD/database.php';
        $id = $_GET["id"];

        $admin = $pdo->Query("SELECT * FROM ADMINISTRADOR WHERE ADM_ID=" . $id)->fetch();

        $nome = $admin["ADM_NOME"];
        $email = $admin["ADM_EMAIL"];
        $senha = $admin["ADM_SENHA"];



        ?>
        <form action="atualizarform.php" method="POST">
            <div class="cadastro">
                <input type="text" name="id" value="<?php echo $id ?> ">
                <label>ID</label>
            </div>
            <div class="cadastro">
                <input type="text" name="nome" value="<?php echo $nome ?> ">
                <label>Nome</label>
            </div>
            <div class="cadastro">
                <input type="text" name="email" value="<?php echo $email ?> ">
                <label>Email</label>
            </div>
            <div class="cadastro">
                <input type="password" name="senha" value="<?php echo $senha ?>">
                <label>Senha</label>
            </div>
            <input type="submit" value="Atualizar">
           <a href="listaradmins.php"><input type="button" value="Voltar"></a> 
        </form>
    </div>
</body>

</html>