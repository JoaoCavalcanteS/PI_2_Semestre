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
    <h1>login ou senha invalida !</h1>
    <a href="login.php">Voltar para a página de Login</a>
    <br>
<?php
//Dados para conexao ao MySQL
require_once '../BD/database.php';

//Captura o post do usuario
$email= $_POST["email"];
$senha= $_POST["senha"];

//Realiza uma Query SQL para buscar o administrador que tenha o email e a senha passado pelo usuario
$admin= $pdo->query("SELECT * FROM ADMINISTRADOR WHERE ADM_EMAIL='" . $email . "' AND ADM_SENHA='" . $senha. "'")->fetchAll();

//Se a retorna for vazio (0), então a senha ou email estão incorretos
if(count($admin)==0){    
    
    echo "<script> confirm('Email ou senha invalido!'); </script>";
    
}
else{
    
    header("Location: menu.php");
}

?>
</body>
</html>
