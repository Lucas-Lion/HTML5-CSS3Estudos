<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/brasao-da-bahia-5.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <!-- ESTILOS PRÓPRIOS -->
    <link rel="stylesheet" href="css/intranet.css">
    <title>Portal SUDESB</title>
</head>

<body>

    <!-- CABEÇALHO -->
    <nav class="navbar navbar-expand-lg nav-color mb-4">
        <a class="navbar-brand" href="#"><img class="ms-5" src="img/SUDESB-BRANCO.png" width="140"
                alt="SUDESB LOGO"></a>

        <button class="navbar-toggler bg-light me-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-sm-center d-lg-flex justify-content-lg-end" id="navbarNav">
            <ul class="navbar-nav d-flex align-items-sm-center" id="menu_">

            </ul>
        </div>
    </nav>

    <!-- CORPO -->
    <main class="mb-5">
        <div class="container d-flex justify-content-center mb-2">
            <img src="img/redes-de-computadores.png" width="80" alt="">
        </div>

        <h1 class="text-center">Bem vindo(a) ao Portal Sudesb</h1>


        <br>

        <hr class="w-50 m-auto">

        <br>

        <div class="container mb-4">
            <strong>
                <p class="categoria">Escolha a categoria abaixo:</p>
            </strong>
        </div>

        <div class="container d-flex flex-row flex-wrap justify-content-lg-between justify-content-sm-center gap-4 caixas"
            id="usuarios">

        </div>
    </main>
    <br>
    <!-- RODAPÉ -->
    <div class="container-fluid text-light footer-color p-1 position-fixed bottom-0">
        <footer class="modal-footer d-flex justify-content-between align-items-center pe-3 ps-3">
            <a href="https://www.bahia.ba.gov.br/" target="_blank"><img src="img/Governo-da-Bahia-white.png" width="130"
                    alt="Governo do Estado"></a>
            <p class="nome">Desenvolvido por Lucas Lion - Equipe de Informática</p>
            <p>&copy; Copyright 2023</p>
        </footer>
    </div>

    <!-- CARDS -->
    <script>
    let divUsuarios = document.querySelector("#usuarios")

    fetch("servicos.json").then((response) => {
        response.json().then((servicos) => {
            servicos.servicos.map((servico) => {
                divUsuarios.innerHTML +=
                    `
                    <a href="${servico.link}" target="_blank" class="card-hover">
                    
                      <div class="card card-color text-light" style="width: 18rem;">
                      
                        <img class="card-img-top w-25 mt-3 m-auto" src="${servico.icone}" alt="Ascom">

                      <div class="card-body text-center">
                      
                        <h5 class="card-title mb-4">${servico.nome_opition}</h5>

                      </div>
                      
                      </div>
                    </a>
                    
                    `
            })
        })
    })
    </script>

    <!-- MENU -->
    <script>
    let divMenu = document.querySelector("#menu_")

    fetch("menu.json").then((response) => {
        response.json().then((menus) => {
            menus.menus.map((menu) => {
                divMenu.innerHTML +=
                    `
                    <li class="nav-item borda ms-2">
                      <a class="nav-link" href="${menu.link_menu}" target="_blank">${menu.nome_opition}
                      </a>
                    </li>
                    
                    `
            }) 
        })
    })
    </script>
</body>

</html>