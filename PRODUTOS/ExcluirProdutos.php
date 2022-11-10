<html>
<head>
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
        top: 50%;
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

    form .info{
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
    .info span {
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        color: red;
        border: none;
        background: none;
        outline: none;
       /* justify-content: center; */
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
        left: 43%;
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
    .azul{
        text-align: center;
        color: #126E82;
    }
</style>

<body>
    <header>
        <img src="../Imagens/logoBravo.png" alt="LogoMarca" class="logo">
    </header>
    <div class="cadastrar-se">
    <h1>Ocultar Evento</h1>

    <?php

    $mysqlhostname = "144.22.244.104";
    $mysqlport = "3306";
    $mysqlusername = "Bravo4Fun";
    $mysqlpassword = "Bravo4Fun";
    $mysqldatabase = "Bravo4Fun";


    //mostra string de conexao ao MySql
    $dsn = 'mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
    $pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);

    //coleta os dados do administrador
    $id = $_GET["id"];

    //Realiza uma Query SQL para buscar o administrador que tenha o email e a senha passado pelo usuario
    $prod = $pdo->query("SELECT * FROM PRODUTO WHERE PRODUTO_ID=" . $id)->fetch();

    //Se o retorno for vazio (0), então a senha ou email estao incorretos
    $textname = $prod["PRODUTO_NOME"];
    $PRODUTO = $prod["PRODUTO_ID"];
    ?> 
    <Form Action="ExcluirProdutoProcesso.php?id=<?php echo $id ?>" method="POST">
        <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
               <div class="info">
            <span class="input-group-text" id="basic-addon1">Código do Produto <div class="azul"><?php echo $PRODUTO ?></div>
            <br>
            <span class="input-group-text" id="basic-addon1">Nome do Produto <div class="azul">
            <?php echo $textname ?>
            </div>
            <input type="hidden" class="form-control" name="PRODUTO" value="<?php echo $PRODUTO ?>">
            <input type="hidden" class="form-control" name="id" value="<?php echo $PRODUTO ?>">
        </div>
        <div class="cadastro">
        <input type="text" name="id">
        <label>Identificador do Produto:</label>
        </div>
        <input type="submit" value="Excluir">
    </Form>
</div>
</body>
</html>