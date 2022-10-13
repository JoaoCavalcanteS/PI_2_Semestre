

<section class="cadastre-se"> 
            <div class="d-grid gap-2 inscreva"> 
            <h1> Cadastro de Produto </h1>               
            <Form class="cad" Action="CriarProduto.php" method="POST">
                <br>
                
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nome: </span>
                    <input type="text" class="form-control" name="nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <hr>               
                <br>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Valor: </span>
                    <input type="text" class="form-control" name="preco" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <hr>
                <br>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descrição:</label>
                    <input type="text" class="form-control" name="desc" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                <br>
                <hr> 
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Desconto:</label>
                    <input type="text" class="form-control" name="descont" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                <br>
                <hr>
                <div class="form-check">
                <input class="form-check-input" type="radio" value= 24 name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label"  for="flexRadioDefault1">
                        Documentario
                    </label>
                </div>                
                <button type="submit" value="Enviar" class="btn btn-outline-danger">Cadastrar</button>    
            </Form> 
            <a href="listarProdutos.php"><button>Voltar para a Lista</button></a> 
        </div>
        </section>
<!-- 24 = Documentario 
9 = Festival de musica
6 = Suspense
42 = Ficção cientifica
53 = Ação 
57 = Terror 
54 =  Animação  -->