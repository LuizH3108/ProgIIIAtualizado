<?php
   require_once("/lib/data.php");
   require_once("/lib/util.php");
   
   $remover = $_GET["remover"];
   
   if (isset($remover)){
      $query = "delete from usuarios where id = $remover";
   } else {
      $id = $_POST["id"];
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $senha = $_POST["senha"];
      $admin = isset($_POST["admin"]);
   
      if (isset($id)){
         $query = "update usuarios set nome = '$nome', email = '$email', senha = '$senha', admin = '$admin' where id = $id";
      } else {
         $query = "insert into usuarios(nome, email, senha, admin) values ('$nome','$email','$senha','$admin')";
      }
   }
   
   $result = $conn->query($query);
   if (!$result){
       header("Location: index.php?p=usuarios/listar&msg=$conn->error");
   } else {
       header("Location: index.php?p=usuarios/listar");
   }
   $result->close();
   $conn->close();
?>
