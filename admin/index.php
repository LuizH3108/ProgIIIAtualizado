<!doctype html>
<html lang="pt">
<head>
  <meta charset="utf-8"/>
  <title>Meus Filmes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/main.css">
</head>
<body>
   <header>
      <?php require("layout/header.php"); ?>
   </header>
   <main>
      <?php
         if (isset($_GET["p"])){
            $page = $_GET["p"];
         } else {
            $page = "inicio";
         }
         require("pages/$page.php");
      ?>
   </main>
   <footer>
      <?php require("layout/footer.php"); ?>
   </footer>
</body>
</html>
