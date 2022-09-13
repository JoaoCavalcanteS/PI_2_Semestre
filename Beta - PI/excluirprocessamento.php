<html>
        <head>
            <title>Processamento de Exclusao de Administrador</title>
        </head>
        <body>
            <h1>Processamento de Exclusao de Administrador</h1>
            <br>
                Mensagem para o usuario
            <br>

<?php            
$mysqlhostname= "144.22.231.213";
$mysqlport="3306";
$mysqlusername="usuarios";
$mysqlpassword="Senac@1976";
$mysqldatabase="meubanco";

//mostra string de conexao ao MySql
$dsn='mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
$pdo= new PDO($dsn, $mysqlusername, $mysqlpassword);        
        
//coleta os dados do administrador
$id = $_GET["id"];

//Realiza uma Query SQL para buscar o administrador que tenha o email e a senha passado pelo usuario

//mostra o comand de inserção
$cmdtext= "DELETE  FROM ADMINISTRADOR WHERE ADM_ID=" . $id;
$cmd = $pdo->prepare($cmdtext);

//executa o comando e verifica se teve sucesso
$status = $cmd->execute();
if($status){
    echo "exclusão com sucesso";
}
else{
    echo "ocorreu um erro ao excluir";
}
?>
            <a href="listaradmins.php">Voltar para a Pagina de Lista</a>
        </body>
        </html>        