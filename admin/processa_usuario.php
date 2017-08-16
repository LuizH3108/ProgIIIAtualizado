<?php
   require_once("acesso_bd.php");
    
   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $senha = $_POST["senha"];
   $admin = isset($_POST["admin"]);

   $query = "insert into usuarios(nome, email, senha, admin) values ('$nome','$email','$senha','$admin')";
   $result = $conn->query($query);
   if (!$result){
       header("Location: index.php?p=usuarios/listar&msg=$conn->error");
   } else {
       header("Location: index.php?p=usuarios/listar");
   }
   $result->close();
   $conn->close();
?>
