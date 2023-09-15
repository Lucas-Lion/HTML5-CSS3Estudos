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
    <!-- ESTILO PRÓPRIO -->
    <link rel="stylesheet" href="css/ramais.css">
    <link rel="stylesheet" href="css/popup.css">
    <title>Ramais</title>
</head>

<body class="bg-light">
    <!-- TOPO -->
    <header class="mb-5 pb-2 pt-2">
        <nav class="w-50 pb-2 pt-2 m-auto">
            <div class="container d-flex justify-content-center align-items-center">
                <a href="#">
                    <img src="img/SUDESB-BRANCO.png" width="150">
                </a>
            </div>
        </nav>
    </header>

    <!-- LEGENDA -->
    <div class="container text-center text-dark mb-5">
        <h1>
            Listagem de Ramais da SUDESB
        </h1>
        <p class="subtitle">
            Seja vem vindo(a) a lista de ramais da SUDESB
        </p>
    </div>

    <!-- PESQUISA E DICAS -->
    <main class="container-fluid pe-5 ps-5">

        <div class="d-flex justify-content-between align-items-center">
            <div class="input-group mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Dicas Telefônicas <i class="bi bi-lightbulb-fill"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header modal-color bg-gradient text-light">
                                <h5 class="modal-title fw-bold" id="exampleModalLabel">Dicas telefônicas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                            <div>
                                <p class="fw-bold fs-5">Transferir Ligação</p>
                                <p class="fs-5">Flash + Ramal</p>
                            </div>
                            <hr>
                            <div>
                                <p class="fw-bold fs-5">Puxar Ligação</p>
                                <p class="fs-5">16 + Ramal</p>
                            </div>
                            <hr>
                            <div>
                                <p class="fw-bold fs-5">Ligação Externa</p>
                                <p class="fs-5">2 + Telefone</p>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="ipesquisa">
                        <span class="input-group-text rounded-0 span-color text-light" id="basic-addon1">
                            <i class="bi bi-search me-2"></i> Pesquisar
                        </span>
                    </label>
                </div>
                <input type="search" class="form-control" id="ipesquisa" onkeyup="search_ramal()">
            </div>

        </div>
    </main>

    <!-- TABELA -->
    <div class="container-fluid pe-5 ps-5 pt-4">
        <table class="table table-striped table-hover margin-table">
            <thead class="text-center">
                <tr>
                    <th scope="col" class="text-light" style="background-color: #082C4D;">Setor</th>
                    <th scope="col" class="text-light" style="background-color: #082C4D;">Ramal</th>
                    <th scope="col" class="text-light" style="background-color: #082C4D;">Nomes</th>
                    <th scope="col" class="text-light" style="background-color: #082C4D;">Telefone</th>
                </tr>
            </thead>
            <tbody class="text-center" id="usuarios">

            </tbody>
        </table>
    </div>


    <!-- RODAPÉ -->
    <div class="container-fluid text-light footer-color p-2 position-fixed bottom-0">
        <footer class="modal-footer d-flex justify-content-between align-items-center pe-3 ps-3">
            <a href="https://www.bahia.ba.gov.br/" target="_blank"><img src="img/Governo-da-Bahia-white.png" width="130"
                    alt="Governo do Estado"></a>
            <p>Desenvolvido por Lucas Lion - Equipe de Informática</p>
            <p>&copy; Copyright 2023</p>
        </footer>
    </div>

    <script src="js/script.js"></script>
    <script src="js/search.js"></script>
    <script src="js/popup.js"></script>
    <script>
    let divUsuarios = document.querySelector("#usuarios")

    fetch("ramais.json").then((response) => {
        response.json().then((ramais) => {
            ramais.ramais.map((ramal_) => {
                divUsuarios.innerHTML +=
                    `
                    <table>
                    
                    <tbody>
                        <tr class="dados" scope="row">
                    <td>${ramal_.setor}</td>
                    <td>${ramal_.nome}</td>
                    <td>${ramal_.ramal}</td>
                    <td><a href="#" style="text-decoration: none; color: black;">${ramal_.Telefone}</a></td>
                        </tr>
                    </tbody>
                    </table>
                    `
            })
        })
    })
    </script>
</body>

</html>