<?php
   require_once("../../../lib/data.php");
   require_once("../../../lib/util.php");
   $remover = fromGet("remover");
   if (isset($remover)){
      $query = "delete from usuarios where id = $remover";
   } else {
      $id = fromPost("id");
      $descricao = fromPost("descricao");
      $icone = fromPost("icone");

      if (isset($id)){
         $query = "update categorias set descricao = '$descricao', icone = '$icone' where id = $id";
      } else {
         $query = "insert into categorias(descricao, icone) values ('$descricao','$icone')";
      }
   }

   $result = $conn->query($query);
   if (!$result){
       echo "0;$conn->error";
   } else {
       echo "1";
   }
   $conn->close();
?>
