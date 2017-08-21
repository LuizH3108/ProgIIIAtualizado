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
<header>
   <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Meus Filmes</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a href="index.php?p=listar-usuarios" class="nav-link" >Usuários</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>
   </nav>
</header>
