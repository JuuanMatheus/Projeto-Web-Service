<?php
include "conexao.php";
 
if (isset($_POST['usuario']) || isset($_POST['senha'])) {
   if(strlen($_POST['usuario']) == 0) {
      echo "Preencha seu e-mail";
   } else if(strlen($_POST['senha']) == 0) {
      echo "Preencha sua senha";
   }else {
      $email = $mysqli->real_escape_string($_POST['usuario']);
      $senha = $mysqli->real_escape_string($_POST['senha']);
 
      $sql_code = "SELECT * FROM login WHERE usuario = '$email' And senha = '$senha'";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);
 
      $quantidade = $sql_query->num_rows;
 
      if($quantidade == 1){
 
         $usuario = $sql_query->fetch_assoc();
 
         if(isset($_SESSION)) {
            session_start();
         }
 
         $_SESSION['usuario_id'] = $usuario['usuario_id'];
         $_SESSION['nome'] = $usuario['nome'];
 
         header("Location: adm.php");
      } else{
         echo "Falha ao logar! E-mail ou senha incorretos";
      }
   }
}

?>