<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">   
        <title>Adicionando novos Administradores</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <h1>Atualizado</h1>          

               
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

                //Captura os valores das variaveis
                $nome= $_POST["nome"];
                $email= $_POST["email"];
                $senha= $_POST["senha"];

                // requisição do cliente!
                $id = $_POST["id"];

                //Monta o comando de update!
                $cmdtext= "UPDATE ADMINISTRADOR set ADM_NOME = '$nome', ADM_EMAIL = '$email', ADM_SENHA = '$senha' where ADM_ID=  $id";
                $cmd = $pdo->prepare($cmdtext);

                //Executa o comando e verifica se teve sucesso
                $status = $cmd->execute();
                if($status){
                    echo "<script>Alert('Adm criado com sucesso')</script>";
                }
                else
                {
                    echo "<script>Alert('Erro')</script>";
                }     
                
            ?>
            <a href="listaradmins.php">Voltar para a Pagina de Lista</a>
        
    </body>
</html>