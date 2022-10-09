<html>
    <head>
        <title>Processamento de exclusao da categoria</title>
    </head>
    <body>
        <h1>Processamento de exclusao de categoria</h1>
        <br>
            <p>Categoria excluido!</p>
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

            //mostra o comand de inserção
            $cmdtext= "UPDATE CATEGORIA SET CATEGORIA_ATIVO=0 WHERE CATEGORIA_ID=" . $id;
            $cmd = $pdo->prepare($cmdtext);

            //executa o comando e verifica se teve sucesso
            $status = $cmd->execute();
            if($status){
                echo "exclusão da categoria com sucesso";
            }
            else{
                echo "ocorreu um erro ao excluir";
            }
        ?>
        <a href="listaCategoria.php">Voltar para a lista de categorias</a>
    </body>
 </html>     