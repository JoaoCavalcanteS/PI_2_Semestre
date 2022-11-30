<html>

<head>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="ListadeAdmin.css">
    <link rel="icon" type="image/x-icon" href="../imagens/logoBravo.png">
    <title>Bravo4Fun</title>
</head>


<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: rgb(0, 0, 0);
        margin: 0;
        padding: 0;
        font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
        background: #000000;
    }

    th {
        color: white;
    }

    .table {
        position: absolute;
        top: 13%;
        width: 100%;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.699);
        margin: 10px 10px 10px 0px;
        color: rgb(255, 255, 255);
    }

    .table_header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        background-color: red;
    }

    .table_header p {
        position: relative;
        top: 8px;
        font-size: large;
        font-weight: 700;
    }

    .table_content {
        height: 650px;
    }


    table {
        width: 100%;
        table-layout: fixed;
        min-width: 1000px;
        border-collapse: collapse;
    }

    thead th {
        background-color: #126E82;
        color: white;
        font-size: 15px;
    }

    th,
    td {
        border-bottom: 1px solid red;
        padding: 10px 20px;
        word-break: break-all;
        text-align: center;
    }

    td img {
        height: 60px;
        width: 60px;
        object-fit: cover;
        border-radius: 15px;
        border: 5px solid red;
    }

    tr td {
        color: white;
        font-weight: 500;
    }

    tr td a {
        text-decoration: none;
        color: white;
    }

    tr:hover td a {
        color: #126E82;
        transition: .3s;
    }

    tr:hover td {
        color: red;
        transition: .3s;
    }

    .menu {
        background: black;
        position: absolute;
        top: 0%;
        width: 100%;
        box-shadow: 0 0 2rem red;
        border: 1px solid red;
        border-bottom: 10px solid red;
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
        position: relative;
        top: 8px;
        left: -32px;
        color: white;
        font-size: 18px;
        font-weight: 500;
        padding: 7px 17px;
        border-radius: 5px;
        text-decoration: none;
    }

    .conteudo .links li:hover a {
        background: red;
        transition: .3s;
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
        <div class="menu">
            <nav>
                <div class="conteudo">
                    <div class="logo"><a href="../CRUD/menu.php"><img src="../Imagens/logobravo.png" alt="LogoMarca" class="logo"></a></div>
                    <ul class="links">
                        <li><a href="../CRUD/login.php">Login</a></li>
                        <li><a href="../CRUD/CadastroAdm.php">Cadastro</a></li>
                        <li><a href="../PRODUTOS/cadastroDeProdutos.php">Cadastro de Eventos</a></li>
                        <li><a href="../ESTOQUE/cadastrarEstoque.php">Cadastro de Estoque</a></li>
                        <li><a href="../imgProduto/cadastroImagem.php">Cadastro de Imagens</a></li>
                        <li><a href="../CATEGORIAS/cadastrarCategoria.php">Cadastro de Categorias</a></li>
                        <li><a href="../CRUD/listaradmins.php">Lista ADM</a></li>
                        <li><a href="../CATEGORIAS/listaCategoria.php">Categoria</a></li>
                        <li><a href="../PRODUTOS/listaProdutos.php">Eventos</a></li>
                        <li><a href="../ESTOQUE/estoque.php">Estoque</a></li>
                    </ul>
                </div>
            </nav>
    </header>

    <div class="table">
        <div class="table_header">
            <p>Lista de Eventos</p>
        </div>
        <div class="table_content">
            <table border="1">
                <thead>
                    <tr>
                        <th>Identificador</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Desconto</th>
                        <th>Categoria</th>
                        <th>Cartaz</th>
                        <th>Atualizar-Produto</th>
                        <th>Atualizar-Imagem</th>
                        <th>Ocultar</th>
                    </tr>
                </thead>

                <?php
                require_once '../BD/database.php';

                $cmd = $pdo->query("SELECT P.PRODUTO_ID,
                P.PRODUTO_NOME,
                P.PRODUTO_DESC,
                P.PRODUTO_PRECO,
                P.PRODUTO_DESCONTO,
                P.CATEGORIA_ID,
                IMG.IMAGEM_URL,
                IMG.IMAGEM_ORDEM                
                FROM PRODUTO AS P
                LEFT JOIN PRODUTO_IMAGEM AS IMG
                ON IMG.PRODUTO_ID = P.PRODUTO_ID  
                WHERE P.PRODUTO_ATIVO = 1
                ORDER BY P.PRODUTO_ID");
                
 

                $produto = $cmd->fetch(PDO::FETCH_NUM);

                while ($linha = $cmd->fetch()) {
                ?>
                    <tr>
                        <td>
                            <?php
                            echo $linha["PRODUTO_ID"];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $linha["PRODUTO_NOME"];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $linha["PRODUTO_DESC"];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $linha["PRODUTO_PRECO"];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $linha["PRODUTO_DESCONTO"];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $linha["CATEGORIA_ID"];
                            ?>
                        </td>
                        <td>
                            <img src="<?php
                                        echo $linha["IMAGEM_URL"];
                                        ?>"> Imagens </img>
                        </td>
                        <td>
                            <a href="atualizarPRODUTO.php?id=<?php echo $linha["PRODUTO_ID"] ?>">Atualizar</a>
                        </td>
                        <td>
                            <a href="atualizarImagem.php?id=<?php echo $linha["PRODUTO_ID"] ?>">Atualizar</a> 
                        </td>
                        <td>
                            <a href="ExcluirProdutos.php?id=<?php echo $linha["PRODUTO_ID"] ?>">Ocultar</a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </table>
        </div>
    </div>


</body>

</html>