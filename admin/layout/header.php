<h1>Meus Filmes</h1>
<?php
   session_start();
   $nome = $_SESSION['nome'];
   if (isset($nome)){

      echo "<h2>Bem vindo $nome </h2>";
   }

?>
