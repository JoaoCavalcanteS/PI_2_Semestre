    <?php
    $mysqlhostname= "144.22.244.104";
    $mysqlport="3306";
    $mysqlusername="Bravo4Fun";
    $mysqlpassword="Bravo4Fun";
    $mysqldatabase="Bravo4Fun";

    //mostra string de conexao ao MySql
    $dsn='mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
    $pdo= new PDO($dsn, $mysqlusername, $mysqlpassword);

    $cmd= $pdo->query("SELECT * FROM ADMINISTRADOR");   
    
    $admins = $cmd->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <html>        
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="ListadeAdmin.css">
        <title>Listar os Administradores</title>
    </head>
    <body>
        <header>
            <nav>
                <ul class="nav justify-content nav">
                    <li class="nav-item">
                    <img src="logoBravo.png" alt="LogoMarca" class="imagem">
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
            </nav>
        </header>
        <h1>Lista de Administradores</h1>
       

    <?php
    $mysqlhostname= "144.22.244.104";
    $mysqlport="3306";
    $mysqlusername="Bravo4Fun";
    $mysqlpassword="Bravo4Fun";
    $mysqldatabase="Bravo4Fun";
    ?>


        <table border="1" class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Atualização</th>
                <th scope="col">Exclusão</th>            
            </tr>
            </thead>
        <tr>
    <?php
        foreach ($admins as $val){
            echo "<tr>";
            echo "<td>{$val("ADM_ID")}</td>";
            echo "<td>{$val("ADM_NOME")}</td>";                    
            echo "<td>{$val("ADM_EMAIL")}</td>";           
            echo "<td>{$val("ADM_SENHA")}</td>/";
            echo "<td>{$val("ADM_SENHA")}</td>/";
            echo "<td><a href=\"atualizarform.php?id={$val("ADM_ID")}\"> Atualizar</a></td>";           
            echo "<td><a href=\"excluirform.php?id={$val("ADM_ID")}\">Excluir</a></td>";
            echo"</tr>";
        }
    ?>
        </table>
        <br>
        <a href="CRUD/index.html"><button type="button" class="btn btn-primary">Voltar para o Indice</button></a>    
    </body>
    </html>