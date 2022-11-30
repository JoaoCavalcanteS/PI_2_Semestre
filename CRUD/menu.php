<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link  rel="icon" type="image/x-icon" href="../imagens/logoBravo.png">
  <title>Bravo4Fun</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: system-ui, "Segoe UI", "Open Sans", "Helvetica Neue",
      sans-serif;
  }

  body {
    background: #000000;
    height: 100vh;
    width: 100%;

    display: flex;
    justify-content: center;
  }

  .cartoes_cad {
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: auto;
    background: black;
    border: 1px solid red;
  }

  .cartoes_cad h1 {
    text-align: center;
    padding: 0 0 20px 0;
    margin: 10px 0;
    color: red;
    border-bottom: 1px solid red;
    background-color: black;
  }

  .cartoes_lista {
    position: absolute;
    top: 130%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: auto;
    background: black;
    border: 1px solid red;
  }

  .cartoes_lista h1 {
    text-align: center;
    padding: 0 0 20px 0;
    margin: 10px 0;
    color: red;
    border-bottom: 1px solid red;
    background-color: black;
  }

  div.cards {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 32px;
    background-color: black;
  }

  div.cards a.card {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background-color: black;
    padding: 1rem 1.5rem;
    max-height: 256px;
    margin-left: 32px;
    color: red;
    font-weight: 500;
    box-shadow: 10px 10px 40px -20px;
    text-decoration: none;
  }

  div.cards a.card:hover {
    background-color: red;
    color: black;
    transition: .3s;
    cursor: pointer;
  }

  div.cards a.card:first-child {
    margin-left: 0px;
  }

  div.cards a.card .icon {
    width: 64px;
    height: 64px;
  }

  div.cards a.card img {
    width: 100%;
  }

  .inscreva-se {
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

  .inscreva-se h1 {
    text-align: center;
    padding: 0 0 20px 0;
    margin: 10px 0;
    color: red;
    border-bottom: 1px solid red;
  }

  .inscreva-se form {
    padding: 0 40px;
    box-sizing: border-box;
  }

  form .login {
    position: relative;
    border-bottom: 2px solid #126e82;
    margin: 30px 0;
  }

  .login input {
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    color: #126e82;
    border: none;
    background: none;
    outline: none;
  }

  .login label {
    position: absolute;
    top: 50%;
    left: 5px;
    color: #126e82;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
    transition: 0.5s;
  }

  .login span::before {
    content: "";
    position: absolute;
    top: 40px;
    left: 0;
    width: 0%;
    height: 2px;
    transition: 0.5s;
  }

  .login input:focus~label,
  .login input:valid~label {
    top: -5px;
    color: red;
  }

  .login input:focus~span::before,
  .login input:valid~span::before {
    width: 100%;
  }

  input[type="submit"] {
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

  input[type="submit"]:hover {
    border-color: #126e82;
    transition: 0.5s;
  }

  .logo {
    position: absolute;
    top: -4%;
    left: 41%;
    max-width: 300px;
    max-height: 300px;
    width: auto;
    height: auto;
  }

  ::-webkit-scrollbar {
    height: 5px;
    width: 5px;
  }

  ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px red;
  }

  ::-webkit-scrollbar-thumb {
    box-shadow: inset 0 0 6px red;
  }
</style>

<body>
  <header>

    <img src="../Imagens/logoBravo.png" alt="LogoMarca" class="logo">
  </header>

  <div class="cartoes_cad">
    <h1>Cadastros</h1>
    <div class="cards">
      <a href="cadastroAdm.php" class="card">
        <div class="icon">
          <img src="usuario.png" />
        </div>
        <h3>Administrador</h3>
        <span>Link para o formulário de cadastro de administradores.</span>
      </a>

      <a href="../PRODUTOS/cadastroDeProdutos.php" class="card">
        <div class="icon">
          <img src="produto.png" />
        </div>
        <h3>Produto</h3>
        <span>Link para o formulário de cadastro de produtos.</span>
      </a>

      <a href="../CATEGORIAS/cadastrarCategoria.php" class="card">
        <div class="icon">
          <img src="categoria.png" />
        </div>
        <h3>Categoria</h3>
        <span>Link para o formulário de cadastro de categoria.</span>
      </a>

      <a href="../ESTOQUE/cadastrarEstoque.php" class="card">
        <div class="icon">
          <img src="estoque.png" />
        </div>
        <h3>Estoque</h3>
        <span>Link para o formulário de cadastro de estoque.</span>
      </a>
    </div>
  </div>

  <hr>

  <div class="cartoes_lista">
    <h1>Listas</h1>
    <div class="cards">
      <a href="listaradmins.php" class="card">
        <div class="icon">
          <img src="usuario.png" />
        </div>
        <h3>Administrador</h3>
        <span>Link para a lista de administradores.</span>
      </a>

      <a href="../PRODUTOS/listaProdutos.php" class="card">
        <div class="icon">
          <img src="produto.png" />
        </div>
        <h3>Produto</h3>
        <span>Link para a lista de produtos.</span>
      </a>

      <a href="../CATEGORIAS/listaCategoria.php" class="card">
        <div class="icon">
          <img src="categoria.png" />
        </div>
        <h3>Categoria</h3>
        <span>Link para a lista de categorias.</span>
      </a>

      <a href="../ESTOQUE/estoque.php" class="card">
        <div class="icon">
          <img src="estoque.png" />
        </div>
        <h3>Estoque</h3>
        <span>Link para a lista de estoque.</span>
      </a>
    </div>
  </div>
</body>

</html>