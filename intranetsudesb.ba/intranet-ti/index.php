<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="assets/governo-do-estado.ico" type="image/x-icon">
    <title>Login</title>
</head>

<body>
    <img src="assets/sudesb-logo.png" width="190" alt="SUDESB_LOGO">

    <div class="imagem-mapa"></div>
    <br>
    <section class="area-login">
        <div class="login">

            <h1>Login</h1>

            <div class="error-message">
                <?php
                        session_start();
                        $_SESSION['authenticated'] = 'desconectado';
                        if (isset($_SESSION['login_error'])) {
                        $errorMessage = $_SESSION['login_error'];
                        echo '<p class="error-message">' . $errorMessage . '</p>';
                        unset($_SESSION['login_error']);
                        }
                        ?>
            </div>

            <form action="scripts/conexao.php" method="POST">
                <label id="label-usuario" for="user">Usuário</label>
                <input type="text" name="usuario" id="user" placeholder="Digite o seu usuário..." required>

                <br>

                <label id="label-senha" for="password">Senha</label>
                <input type="password" name="senha" id="password" placeholder="Digite sua senha..." required>

                <br>
                
                <input type="submit" value="Entrar" id="envio">
            </form>
            <p>&copy; Copyright 2023</p>
        </div>
    </section>
</body>

</html>