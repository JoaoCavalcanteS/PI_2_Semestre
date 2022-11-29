<Html>
    <Head>
        <title>
            Exibição da imagem
        </title>
    </Head>
    <Body>
        <h1>Veja a imagem</h1>
    <?php 

require_once '../BD/database.php';

$ordem = $_POST['IMAGEM_ORDEM'];            
$produto = $_POST['PRODUTO_ID'];
// Coloque aqui a chave do Serviço
//
$IMGUR_CLIENT_ID = "52ff310ba217f07";
//Client secret::db6c06999faec9d3ec0a0a6f2ac986d1be2fdb75
//52ff310ba217f07
  
//
// Se nao nenhum arquivo for selecionado, entao informa que precisa selecionar um 
//
 if(empty($_FILES["imagem"]["name"])){ 
     die('Selecione um arquivo para fazer o upload');
 } 
 
//
// captura O nome e a extensao do arquivo
//
 $fileName = basename($_FILES["imagem"]["name"]); 
 $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
  
//
// Verifica os tipo de arquivo (extensao) são os mais adequados
//
 $allowTypes = array('jpg','png','jpeg','gif'); 
 if(in_array($fileType, $allowTypes)){ 
 
    //
    // Abre o arquivo 
    //
    $handle = fopen($_FILES['imagem']['tmp_name'], "rb");
    $image_source = stream_get_contents($handle, filesize($_FILES['imagem']['tmp_name']));
    
     
    //
    // Post image to Imgur via Web Service API 
    //


    // Inicia o metodo para upload via POST do HTTP
    $ch = curl_init(); 
    //Configura a url de destino
    curl_setopt($ch, CURLOPT_URL, 'https://api.imgur.com/3/image.json'); 
    //Estabelece que sera via POST
    curl_setopt($ch, CURLOPT_POST, TRUE); 
    //Adiciona a Chave do servico ao cabecalho da requisicao
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $IMGUR_CLIENT_ID)); 
    //Adiciona os campos 
    curl_setopt($ch, CURLOPT_POSTFIELDS, array('image' => $image_source)); 
    //Estabelece detalhes do processo
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    //Informa que aguardara o retorno
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    //
    // Inicia o upload
    //
    $response = curl_exec($ch); 

    //
    // Se ocorreu algum erro no processo de upload para o Servico IMGUR
    //
    if(curl_errno($ch)) {
        echo 'Curl erro: '.curl_error($ch);
        die();
    }
    
 
    //
    // Captura a resposta do upload
    //
    curl_close($ch); 
    $responseArr = json_decode($response); 
    
    //
    // Se o conteudo enviado nao for vazio, ou seja, tem um Link para a imagem, a exibe
    //
    if(!empty($responseArr->data->link)){ 
        //AQUI VOCE VAI INSERRIR NO BANCO O LINK ABAIXO
        $cmdtext = "INSERT INTO PRODUTO_IMAGEM(IMAGEM_ORDEM, PRODUTO_ID, IMAGEM_URL ) VALUES(" . $ordem . "," . $produto . ",'" .  $responseArr->data->link . "')";
        
        $cmd = $pdo->prepare($cmdtext);
        $status = $cmd->execute();
        // $responseArr->data->link retorna o Link da imagem
        // Exibe a imagem
        echo '<img src="' . $responseArr->data->link . '"</>';
        // Link para ir para o IMGUR
        echo "<br>";
        echo '<a href="' . $responseArr->data->link . '">Link para a imagem</a>';
    }else{ 
        // Caso tenha algum erro         
        echo 'ERRO: Imagem não foi inserida'; 
    } 
 }else{ 
    // Formato de imagem nao permitido
    echo 'Não é permitido esse formato de imagem'; 
 }  
 ?>


        <h1>Veja o Json retornado</h1>
        <script>
            function exibirJson() {
                // Variavel que contem o Json retornado
                var data = <?php echo $response ?>;

                // Exibi no tag "pre" o conteudo do json
                document.getElementById("json").innerHTML = JSON.stringify(data, undefined, 2);
            }    
        </script>

        <p>

        <input type="button" onclick="exibirJson()" value="Clique para exibir o json">
        <a href="../PRODUTOS/listaProdutos.php">Voltar para a lista de produtos</a>

        <pre id="json"></pre>

    </Body>
</Html>       
