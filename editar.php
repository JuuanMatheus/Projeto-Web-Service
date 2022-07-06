<?php

include "conexao.php";             

$id = $_POST['id'];

$sql = "UPDATE agenda SET status='concluido'  WHERE id = '$id'";
$query = $mysqli->query($sql);  


?>
<script>
        alert('A operação foi feita com sucesso!!!')
        window.location.href='adm.php';
</script>


