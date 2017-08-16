<?php
   require_once("credenciais.php");

   $email = $_POST["email"];
   $senha = $_POST["senha"];


   $conn = new mysqli($host, $login, $senha, $banco);
   if ($conn->connect_error) die($conn->connect_error);

   $usuario = mysql_entities_fix_string($conn, $usuario);

   $query = "select id, nome, email, senha from usuarios where email = '$email'";
   $result = $conn->query($query);
   if (!$result) die($conn->error);

   $rows = $result->num_rows;
   if ($rows == 0){
      header("Location: index.php?p=login&msg=usuário não encontrado");
   } else {
      $result->data_seek($i);
      $usuario = $result->fetch_array(MYSQLI_ASSOC);
      if ($usuario['senha'] == $senha){
         $session_start();
         $_SESSION['email'] = $usuario['email'];
         $_SESSION['nome'] = $usuario['nome'];
         header("Location: index.php");
      } else {
         header("Location: index.php?p=login&msg=senha incorreta");
      }
   }
   $result->close();
   $conn->close();
?>
