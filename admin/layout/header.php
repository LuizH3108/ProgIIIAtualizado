<h1>Meus Filmes</h1>
<?php
   if (isset($usuario_nome)){
      echo
         "
         <h2>
            Usuário: $usuario_nome  (<a href='logic/autenticar.php?sair=1'>sair</a>)
         </h2>
         ";
   }
?>

<nav>
   <ul>
      <li><a href="index.php?p=listar-usuarios">Usuários</a></li>
   </ul>
</nav>
