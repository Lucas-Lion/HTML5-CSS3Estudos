<?php
session_start();

// Destruir todas as variáveis de sessão
session_destroy();

// Redirecionar o usuário de volta para a página de login
header("Location: index.php");
exit();
?>

<a id="exit" href="logout.php" target="_self">
    <p>Sair</p>
</a>