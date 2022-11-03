<html>
    <head>
        <title>Formulario de autenticacao</title>
    </head>
    <body>
        <?php 
            // Se existir uma mensagem em caso de algum erro, deve exibi-la
            if(isset($_GET["msg"])) {
                echo "<b>" . $_GET["msg"] . "</b>";
            }
        ?>
        <p>
        <form action="auth.php" method="post">
            usuario: 
            <input name="usuario" type="text">
            <br>
            senha
            <input name="senha" type="password">
            <br>
            <input name="enviar" type="submit" value="Logar">
        </form>
    </body>
</html>