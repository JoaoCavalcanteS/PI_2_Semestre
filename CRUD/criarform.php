<!--
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">   
    <title>Cria um novo Administrador</title>
    </head>
    <body>
        <h1>Cria um novo Administrador</h1>
        <br>  
        <Form Action="criarprocessamento.php" method="POST">
                <br>
                
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nome : </span>
                    <input type="text" class="form-control" name="nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>               
                <br>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email :</span>
                    <input type="text" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <br>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Senha : </span>
                    <input type="password" class="form-control" name="senha" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <br>
                <button type="submit" value="Enviar" class="btn btn-outline-danger">Enviar</button>
                <a href="login.php"><button type="button" class="btn btn-outline-warning">voltar para a tela de login</button></a>    
        </Form>     
        <br>
    </body>
    </html>       