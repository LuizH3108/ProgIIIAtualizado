<?php
   $id = 0;
   $nome = 0;
   $email = 0;
   $senha = 0;
   $admin = 0;

   if (isset($_GET["id"])){
      $id = $_GET["id"];
      require_once("acesso_bd.php");
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
   <form method="post" action="processa_usuario.php">
      <input type="hidden" name="id" value="<?php echo $id ?>"/>
      <label>Nome:</label><br/>
      <input type="text" name="nome" size="30" value="<?php echo $nome ?>"/><br/>
      <label>E-mail:</label><br/>
      <input type="text" name="email" size="30" value="<?php echo $email ?>"/><br/>
      <label>Senha:</label><br/>
      <input type="password" name="senha" size="10" value="<?php echo $senha ?>"/><br/>
      <br/>
      <input type="checkbox" name="admin" <?php echo $admin?"checked":"" ?>/>
      <label>Administrador</label><br/>
      <br/>
      <input type="submit" value="Gravar"/>
      <input type="submit" formaction="index.php?p=usuarios/listar" value="Voltar"/>
   </form>
</section>
