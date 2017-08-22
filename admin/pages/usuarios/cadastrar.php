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
   <header class="page-header">
      <h2>Informações do Usuário</h2>
   </header>
   <div class="col-lg-6 col-sm-1">
      <form method="post" action="logic/processarUsuario.php">
         <?php if(isset($id)) echo hidden("id", $id); ?>
         <label>Nome:</label><br/>
         <input type="text" name="nome" size="30" value="<?=$nome ?>" class="form-control"  placeholder="Nome" required="true"/><br/>
         <label>E-mail:</label><br/>
         <input type="email" placeholder="E-mail" name="email" size="30" value="<?=$email ?>" class="form-control" required="true"/><br/>
         <label>Senha:</label><br/>
         <input type="password" name="senha" size="10" value="<?=$senha ?>" class="form-control"  placeholder="Senha" required="true"/><br/>

         <div class="checkbox">
            <label> <input type="checkbox" name="admin" <?=($admin?"checked":"")?>>Usuário Administrador</label>
         </div>
         <br/>
         <footer class="text-right">
            <button type="submit"class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Gravar</button>
            <button type="submit" formaction="index.php?p=listar-usuarios" formnovalidate
               class="btn btn-default"><i class="glyphicon glyphicon-home"></i> Voltar</button>
         </footer>
      </form>
   </div>
</section>
