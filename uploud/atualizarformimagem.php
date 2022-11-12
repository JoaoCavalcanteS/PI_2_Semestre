<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar produto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

<nav>
        <ul>
            <li>
                <a href="administradores.php">
                    Administradores
                </a>
            </li>

            <li><a href="listarcategorias.php">Categorias</a></li>
            
            <li><a href="listarprodutos.php">Produtos</a></li>

            <li><a href="listarimagem.php">Cadastrar imagem</a></li>

            <li><a href="listarestoque.php">Estoque</a></li>
            
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>

        <h1>Atualizar imagem</h1>

        <?php
//Dados para conexao ao MySQL → MySQL
require_once '../BD/database.php';

// Coleta os dados do Administrador
$id = $_GET["id"];

// Realiza uma Query SQL para buscar o administrador que tenha o EMAIL e a SENHA passado pelo usuario
$admin = $pdo->query("SELECT * FROM PRODUTO_IMAGEM WHERE IMAGEM_ID=" . $id)->fetch();

$ordem = $admin["IMAGEM_ORDEM"];
$produto_id = $admin["PRODUTO_ID"];

    


?>    


        <div class="container">  
    <form id="contact" action="atualizarimagem.php" method="POST" enctype="multipart/form-data">
      <h3>Cadastro de imagem do produto</h3>
      <h4>Cadastre as imagens dos produtos abaixo</h4>

      <fieldset>
        <label for="">Ordem da Imagem:</label>
        <input placeholder="Ordem da imagem" type="number" step="1" min="1" max="3" name="IMAGEM_ORDEM" id="IMAGEM_ORDEM" tabindex="1"  required>  
        <br>        
        <!-- <input type="text" name ="<;?php echo $id ?>" value = "<;?php echo $id ?>" readonly="readonly"> -->

        <input type="hidden" value="<?php echo $_GET["id"]?>" name="id">
        <br>
        
        
      
      
        <input type="file" name="imagem" required>
      </fieldset>

      <fieldset>
        <a href="atualizarimagem.php"><button class="btn btn-secondary btn-sm">Cadastrar</button>
        <!-- <a href="teste.php?id=<p echo $linha["IMAGEM_ID"] ?>"><button class="btn btn-secondary btn-sm">Atualizar</button></a> -->

      </fieldset>

    </form> 
    
  </div>


  <!-- Pegar o ID para dar o update -->