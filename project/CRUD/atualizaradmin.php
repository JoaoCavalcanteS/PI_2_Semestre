<?php
$mysqlhostname= "144.22.244.104";
$mysqlport="3306";
$mysqlusername="Bravo4Fun";
$mysqlpassword="Bravo4Fun";
$mysqldatabase="Bravo4Fun";

//mostra string de conexao ao MySql
$dsn='mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
$pdo= new PDO($dsn, $mysqlusername, $mysqlpassword);
$id = $_GET["id"];


$admin=$pdo->Query("SELECT * FROM ADMINISTRADOR WHERE ADM_ID=". $id)->fetch(); 

$nome=$admin["ADM_NOME"];
$email=$admin["ADM_EMAIL"];
$senha=$admin["ADM_SENHA"];



?>
<form action="atualizarform.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id ?> ">
<span class="input-group-text" id="inputGroup-sizing-sm">Nome : </span>
<input type="text" class="form-control" name="nome" value="<?php echo $nome ?> " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>               
<br>
<div class="input-group input-group-sm mb-3">
<span class="input-group-text" id="inputGroup-sizing-sm">Email :</span>
<input type="text" class="form-control" name="email" value="<?php echo $email ?> " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
<br>
<div class="input-group input-group-sm mb-3">
<span class="input-group-text" id="inputGroup-sizing-sm">Senha : </span>
<input type="password" class="form-control" name="senha" value="<?php echo $senha ?> " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
</div>     
<input type="submit" value="Atualizar"> 
</form>