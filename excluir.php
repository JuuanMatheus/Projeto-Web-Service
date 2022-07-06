<?php
  include "conexao.php";

  $id = $_POST['id'];

  $sql = "DELETE FROM agenda WHERE id = '$id'";
  $con = $mysqli->query($sql); 

?>
<script>
        alert('A operação foi feita com sucesso!!!')
        window.location.href='adm.php';
</script>
