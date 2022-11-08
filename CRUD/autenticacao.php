<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../imagens/logoBravo.png">
    <title>Bravo4Fun</title>
</head>
<style>
    * {
        margin: 0%;
        padding: 0%;
    }

    body {
        margin-top: 20%;
        text-align: center;
        background-color: black;
        color: white;
        font: normal 24px Arial;
    }

    input[type="button"] {
        position: relative;
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

    .logo {
        position: absolute;
        top: 5%;
        left: 41%;
        max-width: 300px;
        max-height: 300px;
        width: auto;
        height: auto;
    }
</style>

<body>
    <header>
        <img src="../Imagens/logoBravo.png" alt="LogoMarca" class="logo">
    </header>
    <div class="centralizar">
        <div class="row">
            <div class="col-xs-12 col-md col-xl-12 ">
                <div class="textoErro" id="textoErro">
                    <center>
                        <span class="texto">
                            <h1 class="erro">Atenção</h1>
                        </span>
                    </center>
                </div>

                <h2 class="textoErro">
                    <span class="mensagem">
                        Login ou senha Inválida.
                    </span>
                </h2>

            </div>
        </div>
    </div>
    <a href="login.php"><input type="button" value="Voltar para a página de Login"></a>
    <br>
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

    //Captura o post do usuario
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    //Realiza uma Query SQL para buscar o administrador que tenha o email e a senha passado pelo usuario
    $admin = $pdo->query("SELECT * FROM ADMINISTRADOR WHERE ADM_EMAIL='" . $email . "' AND ADM_SENHA='" . $senha . "'")->fetchAll();

    //Se a retorna for vazio (0), então a senha ou email estão incorretos
    if (count($admin) == 0) {

        echo "<script> confirm('Email ou senha invalido!'); </script>";
    } else {

        header("Location: menu.php");
    }

    ?>
</body>

</html>