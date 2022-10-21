<html>
    <head>
        <title>Menu Principal</title>
    </head>    
    <body>
    <?php 
        // Inicia a sessao
        session_start();

        // Se existir a marcacao de estar logado
        if(isset($_SESSION["logado"]) == true) {
            //Se a maracacao esta True

            // Exibe o nome do usuario
            echo "Ola " . $_SESSION["nome"];
        } else {
            // Se a marcacao nao existir ou for falsa

            // Direciona paga a pagina de login com a mensagem de erro
            header("location:form.php?msg=Primeiro logar");
        }
    ?>
    <p>
    <a href="logout.php">sair</a>
    </body>
</html>       