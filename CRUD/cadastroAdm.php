
<section class="cadastre-se"> 
        <div class="d-grid gap-2 inscreva"> 
            <h1> Cadastrar novo administrador </h1>               
            <Form class="cad" Action="criarprocessamento.php" method="POST">
                <br>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nome :</span>
                    <input type="text" class="form-control" name="nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <hr>               
                <br>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email :</span>
                    <input type="text" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <hr>
                <br>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Senha :</span>
                    <input type="password" class="form-control" name="senha" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <br>
                <button type="submit" value="Enviar" class="btn btn-outline-danger">Cadastre-se</button>    
            </Form> 
        </div>
</section>