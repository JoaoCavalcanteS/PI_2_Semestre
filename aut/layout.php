<?php
    //Inicia a sessao
    session_start();

    //Destroi todas as variaveis de sessao
    session_destroy();

    // Direciona para a pagina de login
    header("location:form.php");
?>        