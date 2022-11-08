<html>
        <head>
        <link rel="icon" type="image/x-icon" href="../imagens/logoBravo.png">
    <title>Bravo4Fun</title>
        </head>
    <body>
         <h1>Excluir Categoria</h1>               

        <?php

        require_once '../BD/database.php';        
                
        //coleta os dados do administrador
        $id = $_GET["id"];

        //Realiza uma Query SQL para buscar o administrador que tenha o email e a senha passado pelo usuario
        $categ= $pdo->query("SELECT * FROM CATEGORIA WHERE CATEGORIA_ID=" . $id)->fetch();

        //Se o retorno for vazio (0), então a senha ou email estao incorretos
        $categoria= $categ["CATEGORIA_NOME"];
        $desc= $categ["CATEGORIA_DESC"];
        ?>
            <Form Action="excluirCategoria.php?id=<?php echo $id ?>" method="POST">
                <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
                <br>
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Categoria: <?php echo $categoria?></span>
                <input type="hidden" class="form-control" name="categoria" value="<?php echo $categoria ?>">
                </div>                
                Descrição
                <input type="text" name="desc" value="<?php echo $desc ?>">
                <br>
                <input type="submit" value="Excluir"> 
            </Form>
    </body>
</html>  