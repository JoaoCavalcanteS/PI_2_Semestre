<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">   
        <title>Atualização de Produtos</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <h1>Atualização de Produtos</h1>          

               
            <?php
                
                //Dados para conexao ao MySQL
                require_once '../BD/database.php';

                //Captura os valores das variaveis
                $nome= $_POST["nome"];
                $categoria=$_POST["cat"];
                $preco=$_POST["preco"];
                $desc=$_POST["descricao"];
                $desconto=$_POST["desconto"];
                // requisição do cliente!
                $id = $_POST["id"];
                

                //Monta o comando de update!
                $cmdtext= "UPDATE CATEGORIA set PRODUTO_NOME = '$nome', PRODUTO_DESC = '$desc', PRODUTO_PRECO = '$preco', PRODUTO_DESCONTO = '$desconto', CATEGORIA_ID = '$categoria' where PRODUTO_ID=  '$id'";
                $cmd = $pdo->prepare($cmdtext);

                //Executa o comando e verifica se teve sucesso
                $status = $cmd->execute();
                if($status){
                    echo "<script>Alert('Produtos atualizados')</script>";
                }
                else
                {
                    echo "<script>Alert('Erro')</script>";
                }     
                
            ?>
            <a href="listaProduto.php">Voltar para a Lista</a>
        
    </body>
</html>