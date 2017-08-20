<?php
   require_once("/lib/data.php");
   require_once("/lib/util.php");

   $msg = $_GET["msg"];
   $query = "select id, nome, email, senha, admin from usuarios";
   $result = $conn->query($query);
   if (!$result) die($conn->error);
   $count = $result->num_rows;
?>

<section>
   <header>
      Usuários do Sistema
   </header>
   <?php
      if (isset($msg)){
         echo "<div>$msg</div>";
      }
   ?>
   <table border="1">
      <?php
         if ($count == 0){
            echo "<tr><th>Nenhum usuário foi encontrado.</th></tr>";
         } else {
            
            echo 
               "<tr>
                  <th> id </th> <th> nome </th> <th> e-mail </th> <th> senha </th> <th> admin </th>
               </tr>";
            while($row = $result->fetch_array()) {
               $id = $row['id'];
               echo "<tr>";
               echo "<td>$id</td>";
               echo "<td>".$row['nome']."</td>";
               echo "<td>".$row['email']."</td>";
               echo "<td>".$row['senha']."</td>";
               echo "<td>".$row['admin']."</td>";
               echo "<td><a href='index.php?p=usuarios/cadastrar&id=$id'>Alterar</a></td>";
               echo "<td><a href='processa_usuario.php?remover=remover&id=$id'>Remover</a></td>";
               echo "</tr>";
            }
         }
      ?>
   </table>
   <a href="index.php?p=usuarios/cadastrar">Cadastrar</a>
</section>
