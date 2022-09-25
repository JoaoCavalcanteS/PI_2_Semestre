    <?php
    $mysqlhostname= "144.22.244.104";
    $mysqlport="3306";
    $mysqlusername="Bravo4Fun";
    $mysqlpassword="Bravo4Fun";
    $mysqldatabase="Bravo4Fun";

    //mostra string de conexao ao MySql
    $dsn='mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
    $pdo= new PDO($dsn, $mysqlusername, $mysqlpassword);

    $cmd= $pdo->query("SELECT * FROM ADMINISTRADOR");   
    
    $admins = $cmd->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <html>        
    <head>
        <title>Listar os Administradores</title>
    </head>
    <body>
        <h1>Listar os Administradores</h1>
        <br>
<!-- <<<<<<< Updated upstream -->
<?php
$mysqlhostname= "144.22.244.104";
$mysqlport="3306";
$mysqlusername="Bravo4Fun";
$mysqlpassword="Bravo4Fun";
$mysqldatabase="Bravo4Fun";
?>
<!-- //>>>>>>> Stashed changes -->

        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Atualização</th>
                <th>Exclusão</th>            
            </tr>
        <tr>
    <?php
        foreach ($admins as $val) {
            echo "<tr>";
            echo "<td>{$val("ADM_ID")}</td>";
            echo "<td>{$val("ADM_NOME")}</td>";                    
            echo "<td>{$val("ADM_EMAIL")}</td>";           
            echo "<td>{$val("ADM_SENHA")}</td>/";
            echo "<td><a href=\"atualizarform.php?id={$val("ADM_ID")}\"> Atualizar</a></td>";           
            echo "<td><a href=\"excluirform.php?id={$val("ADM_ID")}\">Excluir</a></td>";
            echo"</tr>";
        }
    ?>
        </table>
        <br>
        <a href="CRUD/index.html">Voltar para o Indice</a>    
    </body>
    </html>