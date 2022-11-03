<?php
require_once '../BD/database.php';
$id = $_GET["id"];


$admin=$pdo->Query("SELECT * FROM CATEGORIA WHERE CATEGORIA_ID=". $id)->fetch(); 

$nomeId= $admin["CATEGORIA_ID"];
$categoria=$admin["CATEGORIA_NOME"];
$desc=$admin["CATEGORIA_DESC"];



?>
<form action="atualizarCategoria.php" method="POST">
<input type="hidden" name="nomeId" value="<?php echo $nomeId ?> ">
<span class="input-group-text" id="inputGroup-sizing-sm">Categoria : </span>
<input type="text" class="form-control" name="categoria" value="<?php echo $categoria ?> " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>               
<br>
<div class="input-group input-group-sm mb-3">
<span class="input-group-text" id="inputGroup-sizing-sm">Descrição :</span>
<input type="text" class="form-control" name="descricao" value="<?php echo $desc ?> " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<br>
</div>     
<input type="submit" value="Atualizar"> 
</form>