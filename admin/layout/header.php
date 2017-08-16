<h1>Meus Filmes</h1>
<?php
   if (isset($usuario_nome)){
      echo
         "
         <h2>
            Bem vindo $usuario_nome  (<a href='sair.php'>sair</a>)
         </h2>
         ";
   }
?>
