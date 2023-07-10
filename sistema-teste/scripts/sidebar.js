document.getElementById("btnCadastrar").addEventListener("click", function() {
  var contentDiv = document.getElementById("content");
  
  // Código HTML do formulário que você deseja exibir
  var formularioHTML = `
  <div class="text-center text-white bg-danger w-50 m-auto rounded legenda">
  <strong>
      <h1>CADASTRO</h1>
  </strong>
</div>
<br>
<div class="container position-relative w-100">
 <form action="" method="post">
     <fieldset class="border p-4 row g-3">

         <strong>
             <legend class="text-secondary">Dados Pessoais</legend>
         </strong>


           <div class="col-md-12">
         <label for="inputEmail4" class="form-label">Nome Completo</label>
         <input type="text" class="form-control" id="inputEmail4" required>
           </div>
           <div class="col-2">
         <label for="inputAddress" class="form-label">Matrícula</label>
         <input type="number" class="form-control" id="inputAddress" placeholder="" required>
           </div>
           <div class="col-md-3">
         <label for="inputCity" class="form-label">CPF / CNPJ</label>
         <input type="number" class="form-control" id="inputCity" required>
           </div>
           <div class="col-md-2">
         <label for="nivel" class="form-label">Nível</label>
         <input type="text" class="form-control" id="nivel" required>
           </div>
           <div class="col-md-3">
         <label for="Cargo" class="form-label">Cargo</label>
         <input type="text" class="form-control" id="Cargo" required>
           </div>
           <div class="col-md-2">
         <label for="inputState" class="form-label">Unidade</label>
         <select id="inputState" class="form-select">
             <option selected>Escolha...</option>
             <option>...</option>
         </select>
            </div>
     </fieldset>

      <br>

     <fieldset class="border p-4 row g-3">
         <strong>
             <legend class="text-secondary">Endereço</legend>
         </strong>
           <div class="col-md-5">
         <label for="CEP" class="form-label">CEP</label>
         <input type="number" class="form-control" id="CEP" required>
           </div>
            <div class="col-md-5">
             <label for="inputComplemento" class="form-label">Cidade</label>
             <input type="text" class="form-control" id="inputComplemento" required>
             </div>
             <div class="col-md-2">
                 <label for="UF" class="form-label">UF</label>
                 <select id="UF" class="form-select">
                     <option selected>Escolha...</option>
                     <option>...</option>
                 </select>
                    </div>
            <div class="col-md-1">
                 <label for="numero" class="form-label">N°</label>
                 <input type="number" class="form-control" id="numero" required>
            </div>
            <div class="col-md-11">
         <label for="inputComplemento" class="form-label">Complemento</label>
         <input type="text" class="form-control" id="inputComplemento" required>
             </div>
     </fieldset>
     
         <br>

     <fieldset class="border p-4 row g-3 justify-content-between">
         <strong>
             <legend class="text-secondary">Dados Bancários</legend>
         </strong>

             <div class="col-md-4">
         <label for="Banco" class="form-label">Banco</label>
         <input type="text" class="form-control" id="Banco" required>
             </div>
             <div class="col-4">
         <label for="Agencia" class="form-label">Agência Bancária</label>
         <input type="number" class="form-control" id="Agencia" placeholder="" required>
             </div>
             <div class="col-md-4">
         <label for="Conta" class="form-label">Conta Corrente</label>
         <input type="number" class="form-control" id="Conta" required>
             </div>
     </fieldset>


         <br>

           <div class="botao">
         <button type="submit" class="btn btn-danger">Cadastrar</button>
           </div>

 </form>
</div>
  `;

  // Atualiza o conteúdo da div "content" com o formulário HTML
  contentDiv.innerHTML = formularioHTML;
});

document.getElementById("btnHome").addEventListener("click", function() {
  var contentDiv = document.getElementById("content");
  
  // Código HTML do conteúdo principal que você deseja exibir
  var conteudoPrincipalHTML = `
    <!-- Conteúdo principal que estava antes -->
  `;
  
  // Atualiza o conteúdo da div "content" com o conteúdo principal HTML
  contentDiv.innerHTML = conteudoPrincipalHTML;
}); 