<?php
   $nome = "";
   $email = "";
   $senha = "";
   $admin = 0;

   if (isset($_GET["id"])){
      $id = fromGet("id");
      $query = "select id, nome, email, senha, admin from usuarios where id = $id";
      $result = $conn->query($query);
      if (!$result) die($conn->error);
      if ($usuario = $result->fetch_array()){
         $nome = $usuario["nome"];
         $email = $usuario["email"];
         $senha = $usuario["senha"];
         $admin = $usuario["admin"];
      }
   }

?>

<section>
   <header>
      Informações do Usuário
   </header>
   <form method="post" action="logic/processarUsuario.php">
      <?php if(isset($id)) echo hidden("id", $id); ?>
      <label>Nome:</label><br/>
      <input type="text" name="nome" size="30" value="<?=$nome ?>"/><br/>
      <label>E-mail:</label><br/>
      <input type="text" name="email" size="30" value="<?=$email ?>"/><br/>
      <label>Senha:</label><br/>
      <input type="password" name="senha" size="10" value="<?=$senha ?>"/><br/>
      <br/>
      <input type="checkbox" name="admin" <?=($admin?"checked":"")?>/>
      <label>Administrador</label><br/>
      <br/>
      <input type="submit" value="Gravar"/>
      <input type="submit" formaction="index.php?p=listar-usuarios" value="Voltar"/>
   </form>
</section>
