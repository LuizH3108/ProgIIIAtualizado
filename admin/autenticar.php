<?php
   require_once("acesso_bd.php");

   $email = $_POST["email"];
   $senha = $_POST["senha"];
   $lembrar = isset($_POST["lembrar"]);

   $query = "select id, nome, email, senha from usuarios where email = '$email'";
   $result = $conn->query($query);
   if (!$result) die($conn->error);
   $rows = $result->num_rows;
   
   if ($rows == 0){
      header("Location: index.php?p=login&msg=usuário não encontrado");
   } else {
      //$result->data_seek(0);
      $usuario = $result->fetch_array(MYSQLI_ASSOC);
      if ($usuario['senha'] == $senha){
         if(!isset($_SESSION)) {
            session_start();
         }
         $_SESSION['email'] = $usuario['email'];
         $_SESSION['nome'] = $usuario['nome'];
         if ($lembrar){
            setcookie('email', $email, time() + 60 * 60 * 24 * 7, '/');
         } else {
            setcookie('email', $email, time() - 2592000 , '/');
         }
         header("Location: index.php");
      } else {
         header("Location: index.php?p=login&msg=senha incorreta");
      }
   }
   $result->close();
   $conn->close();
?>
