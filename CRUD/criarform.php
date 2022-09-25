<html>
    <head>
        <title>Cria um novo Administrador</title>
    </head>
    <body>
        <h1>Cria um novo Administrador</h1>
        <br>  
        <Form Action="criarprocessamento.php" method="POST">
            <br>
            Nome : 
            <input type="text" name="nome">
            <br>
            Email : 
            <input type="text" name="email">
            <br>
            Senha : 
            <input type="password" name="senha">
            <br>
            <input type="submit" value="Enviar"> 
        </Form>     
        <br>
        <a href="CRUD/listaradmins.php">Voltar para a Pagina de Lista</a>    
    </body>
    </html>       