<?php
require_once '../BD/database.php';
$id = $_GET["id"];


$admin=$pdo->Query("SELECT * FROM PRODUTO WHERE PRODUTO_ID=". $id)->fetch(); 

$nome= $admin["PRODUTO_NOME"];
$precoInt=$admin["PRODUTO_PRECO"];
$desc = $admin["PRODUTO_DESC"];
$descont = $admin["PRODUTO_DESCONTO"];
$categoria=$admin["PRODUTO_ID"];



?>
<form action="atualizarProdutoProcess.php?id=<?php echo $id ?>" method="POST">
<input type="hidden" name="nome" value="<?php echo $nome?> ">
<span class="input-group-text" id="inputGroup-sizing-sm">Nome: </span>
<input type="text" class="form-control" name="nome" value="<?php echo $nome ?> " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
<br>
<div class="input-group input-group-sm mb-3">
<span class="input-group-text" id="inputGroup-sizing-sm">Preço:</span>
<input type="text" class="form-control" name="preco" value="<?php echo $precoInt ?> " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
<span class="input-group-text" id="inputGroup-sizing-sm">Descrição:</span>
<input type="text" class="form-control" name="descricao" value="<?php echo $desc ?> " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
<span class="input-group-text" id="inputGroup-sizing-sm">Desconto:</span>
<input type="text" class="form-control" name="desconto" value="<?php echo $descont ?> " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<select name="cat" id="CATEGORIA_ID" required>
                    <option>Categoria</option>
                    <?php

                    require_once '../BD/database.php';

                    $stmt = $pdo->prepare("SELECT * FROM CATEGORIA");
                    $stmt->execute();

                    if($stmt->rowCount() > 0) {
                        while($dados = $stmt->fetch(pdo::FETCH_ASSOC)){
                            echo "<option value='{$dados['CATEGORIA_ID']}'>{$dados['CATEGORIA_NOME']}</option>";
                        }
                    }
                    ?>
                </select>   
<br>
</div>     
<input type="submit" value="Atualizar"> 
</form>
