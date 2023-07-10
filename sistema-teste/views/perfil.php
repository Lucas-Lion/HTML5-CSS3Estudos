<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../pictures/governo-do-estado.ico" type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../style/perfil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Perfil</title>
</head>

<body>
    <aside class="sidebar">
        <header class="sidebar-header">
            <a href="http://www.sudesb.ba.gov.br" target="_blank"><img class="logo-img"
                    src="../pictures/sudesb-logo-branco.png" width="150" alt="SUDESB_LOGO"></a>
        </header>

        <nav>
            <button onclick="" id="btnHome">
                <span>
                    <i class="material-symbols-outlined">home</i>
                    <span>Home</span>
                </span>
            </button>

            <button onclick="" id="btnCadastrar">
                <span>
                    <i class="material-symbols-outlined">assignment_Ind</i>
                    <span>Cadastro</span>
                </span>
            </button>

            <button>
                <span>
                    <i class="material-symbols-outlined">post_add</i>
                    <span>Solicitação</span>
                </span>
            </button>

            <button>
                <span>
                    <i class="material-symbols-outlined">move</i>
                    <span>Status</span>
                </span>
            </button>

            <button>
                <span>
                    <i class="material-symbols-outlined">help</i>
                    <span>Ajuda</span>
                </span>
            </button>

            <button>
                <span>
                    <i class="material-symbols-outlined">move_item</i>
                    <span>Sair</span>
                </span>
            </button>
        </nav>
    </aside>

    <!--MOBILE -->
    <div class="teste">
        <button class="button-mobile" onclick="toggleMenu()">
            <i class="material-symbols-outlined"> menu </i>
            <span>Menu</span>
        </button>
    </div>

    <nav class="menu-mobile" id="menu-mobile">
        <button>
            <span class="border-close" onclick="toggleMenu()">
                <i class="material-symbols-outlined">close</i>
            </span>
        </button>

        <button>
            <span>
                <i class="material-symbols-outlined">home</i>
                <span class="mobile-text">Home</span>
            </span>
        </button>

        <button>
            <span>
                <i class="material-symbols-outlined">assignment_Ind</i>
                <span class="mobile-text">Cadastro</span>
            </span>
        </button>

        <button>
            <span>
                <i class="material-symbols-outlined">post_add</i>
                <span class="mobile-text">Solicitação</span>
            </span>
        </button>

        <button>
            <span>
                <i class="material-symbols-outlined">move</i>
                <span class="mobile-text">Status</span>
            </span>
        </button>

        <button>
            <span>
                <i class="material-symbols-outlined">help</i>
                <span class="mobile-text">Ajuda</span>
            </span>
        </button>

        <button id="logoutButton" onclick="logout()">
            <span>
                <i class=" material-symbols-outlined">move_item</i>
                <span class="mobile-text">Sair</span>
            </span>
        </button>
    </nav>
    <!--MOBILE-->

    <br>
    
    <div class="conteudo" id="content">

    </div>

    <script src="../scripts/animation_perfil.js"></script>
    <script src="../scripts/sidebar.js"></script>
    <script src="../scripts/logout.js"></script>
</body>

</html>