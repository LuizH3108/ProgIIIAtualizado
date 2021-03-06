<?php
   $query = "select id, nome, email, senha, admin from usuarios";
   $result = $conn->query($query);
   if (!$result) die($conn->error);
   $count = $result->num_rows;
?>

<section>
   <header class="page-header">
      <h2>Usuários do Sistema</h2>
   </header>
   <div class="table-responsive">
      <table class="table table-striped table-bordered" >
         <?php
            if ($count == 0){
               echo "<tr><th>Nenhum usuário foi encontrado.</th></tr>";
            } else {
               echo
                  "<tr class='text-uppercase'>
                     <th class='text-center'> id </th>
                     <th> nome </th>
                     <th> e-mail </th>
                     <th> senha </th>
                     <th> admin </th>
                     <th class='text-center' style='min-width: 100px;'>Ações</th>
                  </tr>";
               while($row = $result->fetch_array()) {
                  $id = $row['id'];
                  echo "<tr>";
                  echo "<td class='text-center'>$id</td>";
                  echo "<td>".$row['nome']."</td>";
                  echo "<td>".$row['email']."</td>";
                  echo "<td>".$row['senha']."</td>";
                  echo "<td>".($row['admin']==1?"Sim":"Não")."</td>";
                  echo "<td class='text-center'>";
                     echo "<div class='btn-group btn-group-sm' role='group' >";
                     echo "<a href='index.php?p=cadastrar-usuarios&id=$id' class='btn btn-warning glyphicon glyphicon-pencil' role='button'></a>";
                     echo "<a href='logic/processarUsuario.php?remover=$id'class='btn btn-danger glyphicon glyphicon-trash' role='button'></a>";
                     echo "</div>";
                  echo "</td>";
                  echo "</tr>";
               }
            }
         ?>
      </table>
   </div>
   <a href="index.php?p=cadastrar-usuarios" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Adicionar</a>

</section>
