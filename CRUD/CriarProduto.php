<?php
//Dados para conexao ao MySQL
$mysqlhostname= "144.22.244.104";
$mysqlport="3306";
$mysqlusername="Bravo4Fun";
$mysqlpassword="Bravo4Fun";
$mysqldatabase="Bravo4Fun";

//mostra string de conexao ao MySql
$dsn='mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
$pdo= new PDO($dsn, $mysqlusername, $mysqlpassword);

//Captura os valores das variaveis
$nome= $_POST["nome"];
$preco= $_POST["preco"];
$desc= $_POST["desc"];
$descont= $_POST["descont"];
$categoria= $_POST["cat"];

//Monta o comando de inserção
$cmdtext= "INSERT INTO PRODUTO(PRODUTO_NOME, PRODUTO_DESC, PRODUTO_DESCONTO, CATEGORIA_ID, PRODUTO_PRECO ) VALUES('" . $nome . "','" . $desc . "','". $descont ."','". $categoria ."','". $preco ."')";
$cmd = $pdo->prepare($cmdtext);

//Executa o comando e verifica se teve sucesso
$status = $cmd->execute();
if($status){
    echo "Produto criado com sucesso";
}
else{
    echo "Erro ao inserir";
}
?>