<?php
   require_once("logic/verificarSessao.php");
   require_once("../lib/data.php");
   require_once("../lib/util.php");
   $msg = fromGet("msg");
?>

<!doctype html>
<html lang="pt">
<head>
  <meta charset="utf-8"/>
  <title>Meus Filmes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
</head>
<body>
   <header>
      <?php require 'layout/header.php'; ?>
   </header>

   <article><?php if (isset($msg)) echo $msg;?></article>

   <main>
      <?php
         $params = explode("-", $page);
         $params = array_reverse($params);
         $params = implode("/",$params);
         require "pages/$params.php";
      ?>
   </main>
   <footer>
      <?php require 'layout/footer.php'; ?>
   </footer>
</body>
<script src="../js/main.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>
