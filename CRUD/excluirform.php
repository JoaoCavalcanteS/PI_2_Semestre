<html>
        <head>
            <title>Excluir o Administrador</title>
        </head>
        <body>
            <h1>Excluir o Administrador</h1>
            <br>

<?php
$mysqlhostname= "144.22.244.104";
$mysqlport="3306";
$mysqlusername="Bravo4Fun";
$mysqlpassword="Bravo4Fun";
$mysqldatabase="Bravo4Fun";

//mostra string de conexao ao MySql
$dsn='mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
$pdo= new PDO($dsn, $mysqlusername, $mysqlpassword);        
        
//coleta os dados do administrador
$id = $_GET["id"];

//Realiza uma Query SQL para buscar o administrador que tenha o email e a senha passado pelo usuario
$admin= $pdo->query("SELECT * FROM ADMINISTRADOR WHERE ADM_ID=" . $id)->fetch();

//Se o retorno for vazio (0), então a senha ou email estao incorretos
$nome= $admin["ADM_NOME"];
$email= $admin["ADM_EMAIL"];
?>
            <Form Action="excluirprocessamento.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <br>
                Nome : 
                <input type="text" name="nome" value="<?php echo $nome ?>">
                <br>
                Email : 
                <input type="text" name="email" value="<?php echo $email ?>">
                <br>
                <input type="submit" value="Enviar"> 
            </Form>
        </body>
</html>        
	