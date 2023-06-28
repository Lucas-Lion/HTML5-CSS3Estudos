<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-login/estilo.css">
    <link rel="stylesheet" href="css-login/login.css">
    <link rel="stylesheet" href="css-login/mobile.css">
    <link rel="shortcut icon" href="img/brasao-da-bahia-5.ico" type="image/x-icon">
    <script src="js/script.js"></script>
    <style>
    .error-message {
        color: #dc4a4a;
        text-align: center;
    }
    </style>

    <title>Login</title>
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
    </header>
    <br> <br> <br> <br> <br>
    <main>
        <div class="container">
            <section id="login">
                <div id="imagem">
                    <h1>Login</h1> <br>

                    <div class="error-message">
                        <?php
                        session_start();
                        if (isset($_SESSION['login_error'])) {
                        $errorMessage = $_SESSION['login_error'];
                        echo '<p class="error-message">' . $errorMessage . '</p>';
                        unset($_SESSION['login_error']);
                        }
                        ?>
                    </div>
                </div> <br>

                <div id="forms">
                    <form action="conexao.php" method="POST" autocomplete="off">
                        <p>
                            <label for="iusu">Usuário</label> <br>
                            <input type="text" name="usuario" id="iusu" required minlength="1" size="10"
                                placeholder="Digite seu usuário..." autocomplete="username">
                        </p>
                        <br>
                        <p>
                            <label for="isen">Senha</label> <br>
                            <input type="password" name="senha" id="isen" required minlength="1"
                                placeholder="Digite sua senha..." autocomplete="current-password">
                        </p>
                        <br> <br>
                        <p>
                            <input id="envio" type="submit" value="Entrar">
                    </form>
                </div> <br>
                <div id="links">
                    <p style="color: var(--ENVIO-HOVER);">&copy; Copyright 2023</p>
                </div>
            </section>
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