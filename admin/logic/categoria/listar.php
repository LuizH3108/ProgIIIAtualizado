<?php
   require_once("../../../lib/data.php");
   require_once("../../../lib/util.php");
   //sleep(2);
   $query = "select id, descricao, icone from categorias";

   $busca = fromGet("busca");
   $search = "";
   if (isset($busca)){
      $query = $query." where descricao like %$busca%";
   }

   $result = $conn->query($query);
   if (!$result) die($conn->error);
   $count = $result->num_rows;

   if ($count == 0){
      echo "<tr><th>Nenhuma categoria foi encontrada.</th></tr>";
   } else {
      echo "<table class='table table-striped table-bordered'>";
      echo
         "<tr class='text-uppercase'>
            <th class='text-center'> id </th>
            <th> descrição </th>
            <th> icone </th>
            <th class='text-center' style='min-width: 100px;'>Ações</th>
         </tr>";
      while($row = $result->fetch_array()) {
         $id = $row['id'];
         echo "<tr>";
         echo "<td class='text-center'>$id</td>";
         echo "<td>".$row['descricao']."</td>";
         echo "<td>".$row['icone']."</td>";
         echo "<td class='text-center'>";
            echo "<div class='btn-group btn-group-sm' role='group' >";
            echo "<a class='btn btn-warning glyphicon glyphicon-pencil' onclick='alterar($id)' role='button'></a>";
            echo "<a class='btn btn-danger glyphicon glyphicon-trash'  onclick='remover($id)' role='button'></a>";
            echo "</div>";
         echo "</td>";
         echo "</tr>";
      }
      echo "</table>";
   }
   $conn->close();
?>
