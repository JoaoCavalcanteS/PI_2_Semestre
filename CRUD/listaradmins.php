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

        
        $dsn='mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
        $pdo= new PDO($dsn, $mysqlusername, $mysqlpassword);

        $cmd= $pdo->query("SELECT * FROM ADMINISTRADOR");   
        
        $admins = $cmd->fetch(PDO::FETCH_NUM);

    ?>
        <table border="1" class="table">
<<<<<<< HEAD
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
            
            <?php

                foreach($admins as $i) {
                    echo "<tr>";
                    echo "<td>{$admins['0']}</td>";
                    echo "<td>{$admins['1']}</td>";                    
                    echo "<td>{$admins['2']}</td>";           
                    echo "<td>{$admins['3']}</td>/";            
                    echo "<td><a href=\"atualizarform.php ?id={$admins['0']}\">Atualizar</a></td>";           
                    echo "<td><a href=\"excluirform.php ?id={$admins['0']}\">Excluir</a></td>";
                    echo"</tr>";      
                }
                
            ?>
=======
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
>>>>>>> 7f62c319f53ca75907d6e3c5ca5f24f79582ced4
        </table>
        <br>
        <a href="login.php"><button type="button" class="btn btn-danger">Sair</button></a>    
        <a href="atualizarform.php"><button type="button" class="btn btn-primary">Ad Administradores</button></a>    
    </body>
    </html>