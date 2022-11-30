<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet"> -->
    <link rel="icon" type="image/x-icon" href="../imagens/logoBravo.png">
    <title>Bravo4Fun</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
        background: black;
        overflow: hidden;
    }

    .cadastrar-se {
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
        border-radius: 25px;
        font-size: 18px;
        color: white;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        margin: 25px 0;
    }

    input[type="submit"]:hover {
        border-color: #126E82;
        transition: .5s;
    }

    a input[type="button"] {
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

    a input[type="button"]:hover {
        border-color: #126E82;
        transition: .5s;
    }


    .menu {
        background: black;
        position: fixed;
        width: 100%;
        box-shadow: 0 0 2rem red;
        border: 1px solid red;
        border-bottom: 10px solid red;
    }

    .menu .icone-pesquisa {
        color: white;
    }

    .menu nav {
        position: relative;
        display: flex;
        max-width: calc(100% - 200px);
        margin: 0 auto;
        height: 70px;
        align-items: center;
        justify-content: space-between;
    }

    nav .conteudo {
        display: flex;
        align-items: center;
    }

    nav .conteudo .links {
        margin-left: 80px;
        display: flex;
    }

    .conteudo .logo {
        max-width: 100px;
        max-height: 100px;
        width: auto;
        height: auto;
    }

    .conteudo .links li {
        list-style: none;
    }

    .conteudo .links li a {
        color: white;
        font-size: 18px;
        font-weight: 500;
        padding: 7px 17px;
        border-radius: 5px;
    }

    .conteudo .links li:hover a {
        background: red;
        transition: .3s;
    }

    .menu .barra-pesquisa {
        position: absolute;
        height: 100%;
        max-width: calc(100% - 50px);
        width: 100%;
        display: none;
    }

    .barra-pesquisa input {
        width: 100%;
        height: 100%;
        border: none;
        outline: none;
        font-size: 17px;
        background: black;
    }

    .barra-pesquisa input::placeholder {
        color: white;
    }

    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: 0;
        box-shadow: none;
        border: 1px solid red;
        background: black;
        color: #126E82;
    }

    select::-ms-expand {
        display: none;
    }

    .select {
        position: relative;
        display: flex;
        width: 20em;
        height: 3em;
        background: black;
        line-height: 3;

    }

    select {
        flex: 1;
        padding: 0 .5em;
        color: #126E82;
        cursor: pointer;
    }

    .select::after {
        content: \25BC;
        position: absolute;
        top: 0;
        right: 0;
        padding: 0 1em;
        background: red;
        cursor: pointer;
    }
</style>

<body>
    <header>
        <div class="menu">
            <nav>
                <div class="conteudo">
                    <div class="logo"><a href="../CRUD/menu.php"><img src="../Imagens/logobravo.png" alt="LogoMarca" class="logo"></a></div>
                    <ul class="links">
                        <li><a href="../CRUD/login.php">Login</a></li>
                        <li><a href="../CRUD/CadastroAdm.php">Cadastro</a></li>
                        <li><a href="../PRODUTOS/cadastroDeProdutos.php">Cadastro de Eventos</a></li>
                        <li><a href="../imgProduto/cadastroImagem.php">Cadastro de Imagens</a></li>
                        <li><a href="../CATEGORIAS/cadastrarCategoria.php">Cadastro de Categorias</a></li>
                        <li><a href="../CRUD/listaradmins.php">Lista ADM</a></li>
                        <li><a href="../CATEGORIAS/listaCategoria.php">Categoria</a></li>
                        <li><a href="../PRODUTOS/listaProdutos.php">Eventos</a></li>
                        <li><a href="../ESTOQUE/estoque.php">Estoque</a></li>
                        <li><a href="../ESTOQUE/cadastrarEstoque.php">Cadastro de Estoque</a></li>
                    </ul>
                </div>
            </nav>
    </header>
    <div class="cadastrar-se">
        <div class="d-grid gap-2 inscreva">
            <h1> Cadastro de Evento </h1>
            <form action="CriarProduto.php" method="POST">
                <div class="cadastro">
                    <input type="text" required name="nome">                    
                    <label>Nome</label>
                </div>
                <div class="cadastro">
                    <input type="text" required name="preco">
                    <label>Preço</label>
</div>
                </div>                  
            <input type="submit" value="Cadastrar">    
        </form>
    </div>

        </div>

</body>

</html>
<!-- <head>
    <link rel="icon" type="image/x-icon" href="../imagens/logoBravo.png">
    <title>Bravo4Fun</title>
</head>

<section class="cadastre-se">
    <div class="d-grid gap-2 inscreva">
        <h1> Cadastrar nova categoria </h1>
        <Form class="cad" Action="processamentoCategoria.php" method="POST">
            <br>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Categoria :</span>
                <input type="text" class="form-control" name="categoria" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            <hr>
            <br>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Descrição :</span>
                <input type="text" class="form-control" name="desc" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            <hr>
            <br>
            <button type="submit" value="Enviar" class="btn btn-outline-danger">Cadastrar</button>
        </Form>
    </div>
</section> -->