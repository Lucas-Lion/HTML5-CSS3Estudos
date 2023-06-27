<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo-prime.css">
    <link rel="stylesheet" href="css/caixas.css">
    <link rel="shortcut icon" href="img/brasao-da-bahia-5.ico" type="image/x-icon">
    <script src="js/script.js"></script>
    <title>Sistema de Inventário</title>
</head>

<body>
    <header>
        <nav>
            <div id="logo-centralizar">
                <a href="http://www.sudesb.ba.gov.br" target="_blank">
                    <img src="img/SUDESB-BRANCO.png" width="150px" alt="logo da SUDESB">
                </a>
            </div>
        </nav>
        <div class="saida">
            <a id="exit" href="index.php" target="_self">
                <p>Sair</p>
            </a>
        </div>
    </header> <br>
    <main>
        <h1>Inventário da Informática</h1>
        <p id="subtitulo">Bem vindo(a) ao sistema de inventário da informática!</p>
        <hr>

        <div class="container">
            <a class="link-shadow" href="paginas/maquinas.php" target="_self">
                <div class="shadow">
                    <div id="caixa-1" class="caixas">
                        <p class="legenda">Maquinas Prontas</p>
                    </div>
                </div>
            </a>

            <a class="link-shadow" href="paginas/pecas.php" target="_self">
                <div class="shadow">
                    <div id="caixa-2" class="caixas">
                        <p class="legenda">Peças</p>
                    </div>
                </div>
            </a>

            <a class="link-shadow" href="paginas/cabos.php" target="_self">
                <div class="shadow">
                    <div id="caixa-3" class="caixas">
                        <p class="legenda">Cabos</p>
                    </div>
                </div>
            </a>

            <a class="link-shadow" href="paginas/switch.php" target="_self">
                <div class="shadow">
                    <div id="caixa-4" class="caixas">
                        <p class="legenda">Switchs e Roteadores</p>
                    </div>
                </div>
            </a>

            <a class="link-shadow" href="paginas/perifericos.php" target="_self">
                <div class="shadow">
                    <div id="caixa-5" class="caixas">
                        <p class="legenda">Periféricos</p>
                    </div>
                </div>
            </a>

            <a class="link-shadow" href="paginas/ferramentas.php" target="_self">
                <div class="shadow">
                    <div id="caixa-6" class="caixas">
                        <p class="legenda">Ferramentas</p>
                    </div>
                </div>
            </a>

            <a class="link-shadow" href="paginas/midia.php" target="_self">
                <div class="shadow">
                    <div id="caixa-7" class="caixas">
                        <p class="legenda">CD's e DVD's</p>
                    </div>
                </div>
            </a>

            <a class="link-shadow" href="paginas/toners.php" target="_self">
                <div class="shadow">
                    <div id="caixa-8" class="caixas">
                        <p class="legenda">Toners</p>
                    </div>
                </div>
            </a>

            <a class="link-shadow" href="paginas/outros.php" target="_self">
                <div class="shadow">
                    <div id="caixa-9" class="caixas">
                        <p class="legenda">Outros</p>
                    </div>
                </div>
            </a>
        </div>
    </main>
    <footer>
        <ul id="rodape">
            <li id="sudesb-rodape"><strong><a href="http://www.sudesb.ba.gov.br" target="_blank">SUDESB</a></strong>
            </li>
            <li>Desenvolvido por Lucas Lion - Equipe de Informática</li>
            <li>&copy; Copyright 2023</li>
        </ul>
    </footer>
</body>

</html>