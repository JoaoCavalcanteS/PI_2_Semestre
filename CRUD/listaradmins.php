    <html>        
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="ListadeAdmin.css">
        <title>Listar os Administradores</title>
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
        <h1>Lista de Administradores</h1>
        <span>
            <a href="login.php"><button type="button" class="btn btn-danger">Sair</button></a>    
            <a href="cadastroAdm.php"><button type="button" class="btn btn-primary">Adicionar Administradores</button></a>
            <a href="../CATEGORIAS/listaCategoria.php"><button type="button" class="btn btn-primary">Categorias</button></a>
            <a href=""><button type="button" class="btn btn-primary">Produtos</button></a>
        </span>
    <?php
        $mysqlhostname= "144.22.244.104";
        $mysqlport="3306";
        $mysqlusername="Bravo4Fun";
        $mysqlpassword="Bravo4Fun";
        $mysqldatabase="Bravo4Fun";

        
        $dsn='mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
        $pdo= new PDO($dsn, $mysqlusername, $mysqlpassword);

        $cmd= $pdo->query("SELECT * FROM ADMINISTRADOR WHERE COA(ADM_ATIVO,1)=1");   
        
        $admins = $cmd->fetch(PDO::FETCH_NUM);

    ?>

    <table border="1" class=table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Atualizacao</th>
            <th>Exclusao</th>            
        </tr>
<?php

while($linha = $cmd->fetch()) {
?>
    <tr>
        <td>
            <?php 
                echo $linha["ADM_ID"];
            ?>
        </td>
        <td>
            <?php
                echo $linha["ADM_NOME"];
            ?>
        </td>
        <td>
            <?php
                echo $linha["ADM_EMAIL"];
            ?>
        </td>    
        <td>
            <?php
                echo $linha["ADM_SENHA"];
            ?>
        </td>    
        <td>
            <a href="atualizaradmin.php?id=<?php echo $linha["ADM_ID"] ?>">Atualizar</a>
        </td>
        <td>
            <a href="excluirform.php?id=<?php echo $linha["ADM_ID"] ?>">Excluir</a>
        </td>        
    </tr>
<?php
    } 
?>
    </table>

    </body>
    </html>