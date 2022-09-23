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
$mysqlhostname= "144.22.244.104";
$mysqlport="3306";
$mysqlusername="Bravo4Fun";
$mysqlpassword="Bravo4Fun";
$mysqldatabase="Bravo4Fun";

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
    
    echo "Usuario Invalido!";
    header("Location: login.php?mensagem=Invalido");
}
else{
    echo "Usuario valido!";
    header("Location: login.php?mensagem=VALIDADO");
}

?>
</body>
</html>
