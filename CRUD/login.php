<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="NossoSite.css">
    <title>Login-Beta</title>
    <link rel="stylesheet" href="NossoSite.css" type="text/css">
</head>
<body>
    <header>
        <img src="../Imagens/logoBravo.png" alt="LogoMarca" class="logo">
    </header>
        <section class= "inscreva-se">
            <h1> Login </h1>
            <form action="autenticacao.php" method="post">
                <div class="login">
                    <div class="input-group mb-3 acesso1">
                        <span class="input-group-text log" id="addon-wrapping">Login:</span>
                       <input required type="text" name="email" class="form-control log" placeholder="exemplo_2233" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <hr>
                    <div class="input-group flex-nowrap acesso2" >
                            <span class="input-group-text senha" id="addon-wrapping">Senha:</span>
                            <input required type="password" class="form-control senha " placeholder="*****" aria-label="Senha" aria-describedby="addon-wrapping" name= "senha">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-success senha" id="basic-addon2" value= "logar" >Entrar</button>  
                </div> 
            </form>
</section>
    </body>
</html>