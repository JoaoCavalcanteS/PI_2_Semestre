<html>        
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../CRUD/ListadeAdmin.css">
        <title>Lista das categorias</title>
    </head>
    <body>
        <header>
            <nav>
                <ul class="nav justify-content nav">
                    <li class="nav-item">
                    <img src="../Imagens/logoBravo.png" alt="LogoMarca" class="imagem">
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
            </nav>
        </header>
        <h1>Lista das categorias</h1>
        <span>
            <a href="../CRUD/listarAdmins.php"><button type="button" class="btn btn-danger">Voltar</button></a>    
            <a href="cadastrarCategoria.php"><button type="button" class="btn btn-primary">Adicionar Categorias</button></a>
        </span>
    <?php
        $mysqlhostname= "144.22.244.104";
        $mysqlport="3306";
        $mysqlusername="Bravo4Fun";
        $mysqlpassword="Bravo4Fun";
        $mysqldatabase="Bravo4Fun";

        
        $dsn='mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
        $pdo= new PDO($dsn, $mysqlusername, $mysqlpassword);

        $cmd= $pdo->query("SELECT * FROM CATEGORIA WHERE CATEGORIA_ATIVO=1");   
        
        $admins = $cmd->fetch(PDO::FETCH_NUM);

    ?>

    <table border="1" class=table>
        <tr>
            <th>Id</th>
            <th>Categoria</th>
            <th>Descrição</th>           
        </tr>
<?php

while($linha = $cmd->fetch()) {
?>
    <tr>
        <td>
            <?php 
                echo $linha["CATEGORIA_ID"];
            ?>
        </td>
        <td>
            <?php
                echo $linha["CATEGORIA_NOME"];
            ?>
        </td>
        <td>
            <?php
                echo $linha["CATEGORIA_DESC"];
            ?>
        </td>       
        <td>
            <a href="atualizarProcesso.php?id=<?php echo $linha["CATEGORIA_ID"] ?>">Atualizar</a>
        </td>
        <td>
            <a href="excluirProcesso.php?id=<?php echo $linha["CATEGORIA_ID"] ?>">Excluir</a>
        </td>        
    </tr>
<?php
    } 
?>
    </table>

    </body>
    </html>