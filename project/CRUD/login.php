<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login-Beta</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
        background: #000000;
        overflow: hidden;
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
        border-bottom: 2px solid #126E82;
        margin: 30px 0;
    }

    .login input {
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        color: #126E82;
        border: none;
        background: none;
        outline: none;
    }

    .login label {
        position: absolute;
        top: 50%;
        left: 5px;
        color: #126E82;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
        transition: .5s;
    }

    .login span::before {
        content: '';
        position: absolute;
        top: 40px;
        left: 0;
        width: 0%;
        height: 2px;
        transition: .5s;
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
        border-color: #126E82;
        transition: .5s;
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
</style>

<body>
    <header>
        <img src="../Imagens/logoBravo.png" alt="LogoMarca" class="logo">
    </header>
    <div class="inscreva-se">
        <h1> Login </h1>
        <form action="autenticacao.php" method="post">
            <div class="login">
                <input type="text" required name="email">
                <span></span>
                <label>E-mail</label>
            </div>
            <div class="login">
                <input type="password" required aria-label="Senha" name="senha">
                <label>Senha</label>
            </div>
            <input type="submit" class="botao01" value="Entrar">
    </div>
    </form>
</body>

</html>