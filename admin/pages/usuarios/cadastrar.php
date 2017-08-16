<section>
   <header>
      Informações do Usuário
   </header>
   <form method="post" action="processa_usuario.php">
      <label>Nome:</label><br/>
      <input type="text" name="nome" size="30"/><br/>
      <label>E-mail:</label><br/>
      <input type="text" name="email" size="30"/><br/>
      <label>Senha:</label><br/>
      <input type="password" name="senha" size="10"/><br/>
      <br/>
      <input type="checkbox" name="admin"/>
      <label>Administrador</label><br/>
      <br/>
      <input type="submit" value="Gravar"/>
      <input type="submit" formaction="index.php?p=usuarios/listar" value="Voltar"/>
   </form>
</section>
