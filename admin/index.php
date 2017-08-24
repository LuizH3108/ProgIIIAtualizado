<?php
   require_once("logic/verificarSessao.php");
   require_once("../lib/data.php");
   require_once("../lib/util.php");
   $msg = fromGet("msg");
?>

<!doctype html>
<html lang="pt">
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Meus Filmes">
    <meta name="author" content="Wellington Della Mura">
    <link rel="icon" href="../images/favicon.ico">
    <title>Meus Filmes</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
  </head>
<body>
<?php require 'layout/header.php'; ?>
<div class="container">

   <?php if (isset($msg)) {
      echo "<div class='alert alert-danger alert-dismissible' role='alert'>
         <button type='button' class='close' data-dismiss='alert' aria-label='Fechar'>
            <span aria-hidden='true'>&times;</span>
         </button>
         <strong>Atenção: </strong>$msg
      </div>";
   } ?>

   <?php
         $params = explode("-", $page);
         $params = array_reverse($params);
         $params = implode("/",$params);
         require "pages/$params.php";
   ?>
</div>
<?php require 'layout/footer.php'; ?>
</body>
<script src="../js/main.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>
