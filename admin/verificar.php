<?php
    if (isset($_GET["p"])){
        $page = $_GET["p"];
    } else {
        $page = "inicio";
    }

    if(!isset($_SESSION)) {
        session_start();
    }
    $usuario_email = $_SESSION['email'];
    $usuario_nome = $_SESSION['nome'];
    if (!isset($usuario_email) && $page != "login"){
        header("Location: index.php?p=login");
    }
?>