<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
    }
    body {
      margin: 0;
      padding: 0;
      font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
      background: black;
      overflow: hidden;
    }
    .cadastrar-se{
      position: absolute;
      top: 55%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px;
      background: black;
      box-shadow: 0 0 2rem red;
      border: 1px solid red;
      border-bottom: 10px solid red;
    }
    .cadastrar-se h1{
      text-align: center;
      padding: 0 0 20px 0;
      margin: 10px 0;
      color: red;
      border-bottom: 1px solid red;
    }
    .cadastrar-se form{
      padding: 0 40px;
      box-sizing: border-box;
    }
    form .cadastro{
      position: relative;
      border-bottom: 2px solid #126E82;
      margin: 30px 0;
    }
    .cadastro input{
      width: 100%;
      padding: 0 5px;
      height: 40px;
      font-size: 16px;
      color: #126E82;
      border: none;
      background: none;
      outline: none;
    }
    .cadastro label{
        position: absolute;
        top: 50%;
        left: 5px;
        color: #126E82;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
        transition: .5s;
    }
    .cadastro span::before{
        content: '';
        position: absolute;
        top: 40px;
        left: 0;
        width: 0%;
        height: 2px;
        transition: .5s;
    }

    .cadastro input:focus ~ label,
    .cadastro input:valid ~ label{
        top: -5px;
        color: red;
    }
    .cadastro input:focus ~ span::before,
    .cadastro input:valid ~ span::before{
        width: 100%;
    }

    input[type="submit"]{
        width: 100%;
        height: 50px;
        border: 1px solid;
        background: red;
        border-radius: 25px;
        font-size: 18px;
        color: white;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        margin: 25px 0;
    }
    input[type="submit"]:hover{
        border-color:#126E82;
        transition: .5s;
    }
    a input[type="button"]{
        width: 100%;
        height: 50px;
        border: 1px solid;
        background: red;
        border-radius: 25px;
        font-size: 18px;
        color: white;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        margin: 25px 0;
    }
    a input[type="button"]:hover{
        border-color:#126E82;
        transition: .5s;
    }


.menu{
    background: black;
    position: fixed;
    width: 100%;
    box-shadow: 0 0 2rem red;
      border: 1px solid red;
      border-bottom: 10px solid red;
}

.menu .icone-pesquisa{
    color: white;
}

.menu nav{
    position: relative;
    display: flex;
    max-width: calc(100% - 200px);
    margin: 0 auto;
    height: 70px;
    align-items: center;
    justify-content: space-between;
}

nav .conteudo{
    display: flex;
    align-items: center;
}

nav .conteudo .links{
    margin-left: 80px;
    display: flex;
}

.conteudo .logo {
    max-width: 100px;
    max-height: 100px;
    width: auto;
    height: auto;
}

.conteudo .links li{
    list-style: none;
}
.conteudo .links li a{
    color: white;
    font-size: 18px;
    font-weight: 500;
    padding: 7px 17px;
    border-radius: 5px;
}

.conteudo .links li:hover a{
    background: red;
    transition: .3s;
}

.menu .barra-pesquisa{
    position: absolute;
    height: 100%;
    max-width: calc(100% - 50px);
    width: 100%;
    display: none;
}

.barra-pesquisa input{
    width: 100%;
    height: 100%;
    border: none;
    outline: none;
    font-size: 17px;
    background: black;
}

.barra-pesquisa input::placeholder{
    color: white;
}

</style>
<body>
    <header>
<div class="menu">
    <nav>
        <div class="conteudo">
        <div class="logo"> <img src="../Imagens/logobravo.png" alt="LogoMarca" class="logo"></div>
        <ul class="links">
        <li><a href="login.php">Login</a></li>
        <li><a href="CadastroAdm.php">Cadastro</a></li>
        <li><a href="cadastroDeProdutos.php">Cadastro de Produtos</a></li>
            <li><a href="listaradmins.php">Lista ADM</a></li>
            <li><a href="../CATEGORIAS/listaCategoria.php">Categoria</a></li>
            <li><a href="listaProdutos.php">Produtos</a></li>
        </ul>
        </div>
            </nav>
</header>
    <div class="cadastrar-se"> 
        <div class="d-grid gap-2 inscreva"> 
        <h1> Cadastro de Produto </h1>               
        <form action="CriarProduto.php" method="POST">
            <div class="cadastro">
                <input type="text" required name="nome">
                <span></span>
                <label>Nome</label>
            </div>
            <div class="cadastro">
                <input type="text" required name="preco">
                <label>Preço</label>
            </div>
            <div class="cadastro">
                <input type="text" required name="desc">
                <label>Descrição:</label>
                </div>
            <div class="cadastro">
                <input type="text" required name="descont">
                <label>Desconto:</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value= 24 name="categoria" id="flexRadioDefault1">
                    <label class="form-check-label"  for="flexRadioDefault1">
                        Aventura
                    </label>
                    <div class="cadastro">
                        <input type="text" required name="ativo">
                        <label>ativar:</label>
                        </div>

            </div>                
            <input type="submit" value="Cadastrar">    
        </form>
    </div>
    </section>
    </body>
</html>