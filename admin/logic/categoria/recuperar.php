<?php
   require_once("../../../lib/data.php");
   require_once("../../../lib/util.php");
   $id = fromPost("id");
   $query = "select id, descricao, icone from categorias where id = $id";
   $result = $conn->query($query);
   if (!$result) die($conn->error);
   $count = $result->num_rows;
   $row = $result->fetch_array(MYSQLI_ASSOC);
   echo json_encode($row);
   $conn->close();
?>
