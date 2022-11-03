<section class="cadastre-se"> 
        <div class="d-grid gap-2 inscreva"> 
            <h1> Cadastrar nova categoria </h1>               
            <Form class="cad" Action="processamentoCategoria.php" method="POST">
                <br>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Categoria :</span>
                    <input type="text" class="form-control" name="categoria" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <hr>               
                <br>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Descrição :</span>
                    <input type="text" class="form-control" name="desc" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <hr>
                <br>
                <button type="submit" value="Enviar" class="btn btn-outline-danger">Cadastrar</button>    
            </Form> 
        </div>
</section>
