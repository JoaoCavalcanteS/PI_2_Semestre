<html>        
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="ListadeAdmin.css">
        <title>PRODUTOS</title>
    </head>
    <body>
        <header>
            <nav>
                <ul class="nav justify-content nav">
                    <li class="nav-item">
                    <img src="logoBravo.png" alt="LogoMarca" class="imagem">
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
            </nav>
        </header>
        <h1>PRODUTOS</h1>
        <a href="login.php"><button type="button" class="btn btn-danger">SAIR</button></a>    
        <a href="CadastrodeProdutos.php"><button type="button" class="btn btn-primary">ADICIONAR PRODUTOS</button></a>
        <!-- <a href="ListarProdutos.php"><button type="button" class="btn btn-danger">PRODUTOS E ESTOQUE</button></a>     -->
        <a href="listaradmins.php"><button type="button" class="btn btn-primary">Lista de Administradores</button></a>
    <?php
        $mysqlhostname= "144.22.244.104";
        $mysqlport="3306";
        $mysqlusername="Bravo4Fun";
        $mysqlpassword="Bravo4Fun";
        $mysqldatabase="Bravo4Fun";

        
        $dsn='mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
        $pdo= new PDO($dsn, $mysqlusername, $mysqlpassword);

        $cmd= $pdo->query("SELECT * FROM PRODUTO WHERE PRODUTO_ATIVO=1");   
        
        $produto = $cmd->fetch(PDO::FETCH_NUM);

    ?>

    <table border="1" class=table>
        <tr>
            <th>Indentificador</th>
            <th>categoria</th>
            <th>Discrição</th>
            <th>Preço</th>
            <th>Desconto</th>
            <th>Atualizacao</th>
            <th>Ocutar</th>            
        </tr>
<?php

while($linha = $cmd->fetch()) {
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
            <a href="atualizarPRODUTO.php?id=<?php echo $linha["PRODUTO_ID"] ?>">Atualizar</a>
        </td>
        <td>
            <a href="excluirform.php?id=<?php echo $linha["PRODUTO_ID"] ?>">Ocutar</a>
        </td>        
    </tr>
<?php
    } 
?>
    </table>
        
            
    </body>
    </html>