<?php
   if (isset($_GET["p"])){
     $page = $_GET["p"];
   } else {
     $page = "inicio";
   }
   if(!isset($_SESSION)) {
     session_start();
   }
   if (isset($_SESSION['email'])){
      $usuario_email = $_SESSION['email'];
   }else if ($page != "login"){
        header("Location: index.php?p=login");
   }
   if (isset($_SESSION['nome'])){
      $usuario_nome = $_SESSION['nome'];
   }
   $auth = isset($usuario_email) &&  isset($usuario_nome);
?>
