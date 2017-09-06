<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Meus Filmes</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> Meus Filmes</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
<?php if ($auth) { ?>
      <ul class="nav navbar-nav">
           <li><a href="index.php">Início</a></li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros<span class="caret"></span></a>
             <ul class="dropdown-menu">
                <li><a href="index.php?p=listar-categorias">Categorias</a></li>
               <li><a href="#">Classificações</a></li>
               <li role="separator" class="divider"></li>
               <li class="dropdown-header">Filmes</li>
               <li><a href="#">Cadastrar Filme</a></li>
               <li><a href="#">Listar Filmes</a></li>
             </ul>
           </li>
           <li><a href="index.php?p=listar-usuarios">Usuários</a></li>
           <li><a href="index.php?p=ajuda">Ajuda</a></li>
      </ul>
      <p class="navbar-text navbar-right">
         Usuário: <label><?=$usuario_nome?></label> (<a href="logic/autenticar.php?sair=1" >Sair</a>)

      </p>
<?php } ?>
    </div>
  </div>
</nav>
