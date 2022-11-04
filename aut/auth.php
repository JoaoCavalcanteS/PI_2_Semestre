<?php 

    // Inicia a sessao
    session_start();
    
    // captura os valores do formulario de autenticacao
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    
    // Se o usuario e senha forem os esperados
    if($usuario == "luciano" AND $senha == "senha") {
        // Se forem validos
    
        // Gera uma marcacao para saber que esta logado
        $_SESSION["logado"] = true;
    
        // Armazena o nome do usuario
        $_SESSION["nome"] = $usuario;
    
        // Direciona para a pagina do Menu Principal
        header("location:principal.php");
    } else {
        // se nao forem validos
        
        // Direciona para a pagina de login com a mensagem de erro
        header("location:form.php?msg=usuario ou senha incorretas");
    }
?>        
    