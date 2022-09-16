<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - autenticação</title>
</head>
<body>
    <br>
    <h1>Login - autenticação</h1>
    <br>
<?php
//Dados para conexao ao MySQL
/*$mysqlhostname= "10.135.0.53";
$mysqlport="3306";
$mysqlusername="aluno";
$mysqlpassword="aluno";
$mysqldatabase="10.135.0.53/sqledutsi";*/
$mysqlhostname= "144.22.231.213";
$mysqlport="3306";
$mysqlusername="usuarios";
$mysqlpassword="Senac@1976";
$mysqldatabase="meubanco";

//mostra string de conexao ao MySql
$dsn='mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
$pdo= new PDO($dsn, $mysqlusername, $mysqlpassword);

//Captura o post do usuario
$email= $_POST["email"];
$senha= $_POST["senha"];

//Realiza uma Query SQL para buscar o administrador que tenha o email e a senha passado pelo usuario
$admin= $pdo->query("SELECT * FROM ADMINISTRADOR WHERE ADM_EMAIL='" . $email . "' AND ADM_SENHA='" . $senha. "'")->fetchAll();

//Se a retorna for vazio (0), então a senha ou email estão incorretos
if(count($admin)==0){
    echo "Usuário ou senha invalidos";
}
else{
    echo "Usuário autenticado";
}

?>
</body>
</html>
