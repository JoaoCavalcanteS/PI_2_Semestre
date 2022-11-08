<html>
    <head>
    <link rel="icon" type="image/x-icon" href="../imagens/logoBravo.png">
    <title>Bravo4Fun</title>
    </head>
    <body>
        <h1>Processamento de Exclusao de Administrador</h1>
        <br>
            <p>usuario excluido!</p>
        <br>

        <?php            

            require_once '../BD/database.php';      
                    
            //coleta os dados do administrador
            $id = $_GET["id"];

            //Realiza uma Query SQL para buscar o administrador que tenha o email e a senha passado pelo usuario

            //mostra o comand de inserção
            $cmdtext= "UPDATE ADMINISTRADOR SET ADM_ATIVO=0 WHERE ADM_ID=" . $id;
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