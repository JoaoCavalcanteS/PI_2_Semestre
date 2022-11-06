<html>
        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
            <title>Excluir PRODUTO</title>
        </head>
    <body>
         <h1>Excluir Produto</h1>               

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
        $prod= $pdo->query("SELECT * FROM PRODUTO WHERE PRODUTO_ID=" . $id)->fetch();

        //Se o retorno for vazio (0), então a senha ou email estao incorretos
        // $PRODUTO= $prod["PRODUTO_NOME"];
        $PRODUTO = $prod["PRODUTO_ID"];
        ?>
            <Form Action="ExcluirProdutoProcesso.php?id=<?php echo $id ?>" method="POST">
                <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
                <br>
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Produto <?php echo $PRODUTO?></span>
                <input type="hidden" class="form-control" name="PRODUTO" value="<?php echo $PRODUTO ?>">
                <input type="hidden" class="form-control" name="id" value="<?php echo $PRODUTO ?>">
                </div>                
                Identificador do Produto:
                <input type="text" name="id">
                <br>
                <input type="submit" value="Excluir"> 
            </Form>
    </body>
</html>  