<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="pictures/governo-do-estado.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/cadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Cadastro</title>
</head>

<body>
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
                <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-2">
                <label for="inputAddress" class="form-label">Matrícula</label>
                <input type="number" class="form-control" id="inputAddress" placeholder="">
                  </div>
                  <div class="col-md-3">
                <label for="inputCity" class="form-label">CPF / CNPJ</label>
                <input type="number" class="form-control" id="inputCity">
                  </div>
                  <div class="col-md-2">
                <label for="nivel" class="form-label">Nível</label>
                <input type="text" class="form-control" id="nivel">
                  </div>
                  <div class="col-md-3">
                <label for="Cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control" id="Cargo">
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
                <input type="number" class="form-control" id="CEP">
                  </div>
                   <div class="col-md-5">
                    <label for="inputComplemento" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="inputComplemento">
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
                        <input type="number" class="form-control" id="numero">
                   </div>
                   <div class="col-md-11">
                <label for="inputComplemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="inputComplemento">
                    </div>
            </fieldset>
            
                <br>

            <fieldset class="border p-4 row g-3 justify-content-between">
                <strong>
                    <legend class="text-secondary">Dados Bancários</legend>
                </strong>
    
                    <div class="col-md-4">
                <label for="Banco" class="form-label">Banco</label>
                <input type="email" class="form-control" id="Banco">
                    </div>
                    <div class="col-4">
                <label for="Agencia" class="form-label">Agência Bancária</label>
                <input type="number" class="form-control" id="Agencia" placeholder="">
                    </div>
                    <div class="col-md-4">
                <label for="Conta" class="form-label">Conta Corrente</label>
                <input type="number" class="form-control" id="Conta">
                    </div>
            </fieldset>
    

                <br>

                  <div class="botao" style="">
                <button type="submit" class="btn btn-danger">Cadastrar</button>
                  </div>

        </form>
    </div>

    <div id="popup" style="display: none;">
        <p>O envio foi realizado com sucesso!</p>
    </div>

    <script src="../scripts/popup_cadastro.js"></script>
</body>

</html>