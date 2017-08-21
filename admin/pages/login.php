<?php
   $lastLogin = $_COOKIE['email'];
?>

<section>
   <header>
      Informe seus dados para prosseguir
   </header>
   <form method="post" action="logic/autenticar.php">
      <label>E-mail:</label><br/>
      <input type="text" name="email" size="10" value="<?=$lastLogin?>" required="true"/><br/>
      <label>Senha:</label><br/>
      <input type="password" name="senha" size="10" required="true"/><br/>
      <br/>
      <input type="checkbox" name="lembrar"/>
      <label>Lembrar de mim</label><br/>
      <br/>
      <input type="submit" value="Entrar"/>
   </form>
</section>
