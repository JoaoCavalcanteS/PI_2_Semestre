
    <html>
    <head>
        <title>Listar os Administradores</title>
    </head>
    <body>
        <h1>Listar os Administradores</h1>
        <br>
<?php
$mysqlhostname= "10.135.0.53";
$mysqlport="3306";
$mysqlusername="aluno";
$mysqlpassword="aluno";
$mysqldatabase="10.135.0.53/sqledutsi";

//mostra string de conexao ao MySql
$dsn='mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
$pdo= new PDO($dsn, $mysqlusername, $mysqlpassword);

$cmd= $pdo->query("SELECT * FROM ADMINSTRADOR");    
?>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Atualizacao</th>
                <th>Exclusao</th>            
            </tr>
        <tr>
    <?php
        while($linha=$cmd->fetch()){    
    ?>
            <td>
                <?php
                    echo $linha("ADM_ID");
                ?>
            </td>
            <td>
                <?php
                    echo $linha("ADM_NOME");
                ?>
            </td>
            <td>
                <?php
                    echo $linha("ADM_EMAIL");
                ?>
            </td>
            <td>
                <?php
                    echo $linha("ADM_SENHA");
                ?>
            </td>
            <td>
                <a href="atualizarform.php?id= <?php echo $linha("ADM_ID") ?>"> Atualizar </a>
            </td>
            <td>
                <a href="excluirform.php? <?php echo $linha("ADM_ID") ?>">Excluir</a>
            </td>        
        </tr>
        
<?php
    }
?>
        </table>
        <br>
        <a href="../index.html">Voltar para o Indice</a>    
    </body>
    </html>