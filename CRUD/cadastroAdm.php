<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }
        body {
        margin: 0;
        padding: 0;
        font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
        background: #000000;
        overflow: hidden;
        }
        .cadastrar-se{
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        background: black;
        box-shadow: 0 0 2rem red;
        border: 1px solid red;
        border-bottom: 10px solid red;
        }
        .cadastrar-se h1{
        text-align: center;
        padding: 0 0 20px 0;
        margin: 10px 0;
        color: red;
        border-bottom: 1px solid red;
        }
        .cadastrar-se form{
        padding: 0 40px;
        box-sizing: border-box;
        }
        form .cadastro{
        position: relative;
        border-bottom: 2px solid #126E82;
        margin: 30px 0;
        }
        .cadastro input{
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        color: #126E82;
        border: none;
        background: none;
        outline: none;
        }
        .cadastro label{
            position: absolute;
            top: 50%;
            left: 5px;
            color: #126E82;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
            transition: .5s;
        }
        .cadastro span::before{
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 0%;
            height: 2px;
            transition: .5s;
        }
        .cadastro input:focus ~ label,
        .cadastro input:valid ~ label{
            top: -5px;
            color: red;
        }
        .cadastro input:focus ~ span::before,
        .cadastro input:valid ~ span::before{
            width: 100%;
        }
        input[type="submit"]{
            width: 100%;
            height: 50px;
            border: 1px solid;
            background: red;
            border-radius: 25px;
            font-size: 18px;
            color: white;
            font-weight: 700;
            cursor: pointer;
            outline: none;
            margin: 25px 0;
        }
        input[type="submit"]:hover{
            border-color:#126E82;
            transition: .5s;
        }
        .menu{
        background: black;
        position: absolute;
        top: 0%;
        width: 100%;
        box-shadow: 0 0 2rem red;
        border: 1px solid red;
        border-bottom: 10px solid red;
            }


        .menu nav{
            position: relative;
            display: flex;
            max-width: calc(100% - 200px);
            margin: 0 auto;
            height: 70px;
            align-items: center;
            justify-content: space-between;
        }

        nav .conteudo{
            display: flex;
            align-items: center;
        }

        nav .conteudo .links{
            margin-left: 80px;
            display: flex;
        }

        .conteudo .logo {
            max-width: 100px;
            max-height: 100px;
            width: auto;
            height: auto;
        }

        .conteudo .links li{
            list-style: none;
        }
        .conteudo .links li a{
            position: relative;
            top: 0px;
            color: white;
            font-size: 18px;
            font-weight: 500;
            padding: 7px 17px;
            border-radius: 5px;
            text-decoration: none;
        }

        .conteudo .links li:hover a{
            background: red;
            transition: .3s;
        }

        ::-webkit-scrollbar{
            height: 5px;
            width: 5px;
        }

        ::-webkit-scrollbar-track{
            box-shadow: inset 0 0 6px red;
        }

        ::-webkit-scrollbar-thumb{
            box-shadow: inset 0 0 6px red;
        }
    </style>
<body>
    <header>
<div class="menu">
    <nav>
        <div class="conteudo">
        <div class="logo"><a href="../CRUD/menu.php"><img src="../Imagens/logobravo.png" alt="LogoMarca" class="logo"></a></div>
        <ul class="links">
            <li><a href="login.php">Login</a></li>
            <li><a href="CadastroAdm.php">Cadastro</a></li>
            <li><a href="../PRODUTOS/cadastroDeProdutos.php">Cadastro de Produtos</a></li>
            <li><a href="listaradmins.php">Lista ADM</a></li>
            <li><a href="../CATEGORIAS/listaCategoria.php">Categoria</a></li>
            <li><a href="../PRODUTOS/listaProdutos.php">Produtos</a></li>
        </ul>
        </div>
            </nav>
</header>
    <div class="cadastrar-se"> 
        <h1> Cadastro ADM </h1>               
        <form action="criarprocessamento.php" method="post">
            <div class="cadastro">
                <input type="text" required name="nome">
                <span></span>
                <label>Nome</label>
            </div>               
            <div class="cadastro">
                <input type="text" required name="email">
                <label>E-mail</label>
            </div>
            <div class="cadastro">
                <input type="password" required name="senha">
                <label>Senha</label>
            </div>
            <input type="submit" value="Cadastrar">   
        </form> 
        </div>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>