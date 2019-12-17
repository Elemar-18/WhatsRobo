<?php
    session_start();
    session_destroy();

    unset(
        $_SESSION['nomecompleto'],
        $_SESSION['email'],
        $_SESSION['senha'],
        $_SESSION['numtelefone']
    );

    header("Location: login.php");
?>