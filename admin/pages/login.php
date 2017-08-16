<?php
   if (isset($_COOKIE['email'])) $last = $_COOKIE['email'];

?>

<section>
   <header>
      Informe seus dados para prosseguir
   </header>
   <form method="post" action="autenticar.php">
      <label>E-mail:</label><br/>
      <input type="text" name="email" size="10" value="<?php echo $last ?>"/><br/>
      <label>Senha:</label><br/>
      <input type="password" name="senha" size="10"/><br/>
      <br/>
      <input type="checkbox" name="lembrar"/>
      <label>Lembrar de mim</label><br/>
      <br/>
      <input type="submit" value="Entrar"/>
      <input type="submit" formaction="index.php?p=registro" value="Registrar"/>
   </form>
</section>
