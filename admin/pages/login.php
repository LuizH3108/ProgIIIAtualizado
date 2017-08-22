<?php
if (isset($_COOKIE['email'])){
   $lastLogin = $_COOKIE['email'];
}
else {
   $lastLogin = "";
}
?>

<section class="panel panel-default login">
  <div class="panel-heading">
    <h3 class="panel-title">Área Administrativa</h3>
  </div>
  <div class="panel-body">
      <form method="post" action="logic/autenticar.php">
         <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="<?=$lastLogin?>" required="true"/>
         </div>
         <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha"  required="true"/>
         </div>
         <div class="checkbox">
            <label> <input type="checkbox"  name="lembrar">Lembrar de mim</label>
         </div>
         <button type="submit" class="btn btn-primary  btn-block">Entrar</button>
      </form>
   </div>
</section>
