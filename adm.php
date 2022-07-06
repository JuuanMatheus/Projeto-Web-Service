<?php
  include "conexao.php";

  $consulta = "SELECT *FROM agenda";
  $con = $mysqli->query($consulta) or die ($mysqli->error);

  
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Richsey</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/adm.css" />

    <!-- FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <header id="header">
      <nav class="container">
        <p class="logo"><span>R</span>ichsey.</p>
        <div class="menu">
          <ul>
            <li><a class="title" href="index.html">Inicio</a></li>
            <li><a class="title" href="sobre.html">Sobre</a></li>
            <li><a class="title" href="servicos.html">Serviços</a></li>
            <li><a class="title" href="contato.html">Contato</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div id="bg">
      <div class="ball ball_1"></div>
      <div class="ball ball_2"></div>
      <div class="ball ball_3"></div>
    </div>

    <main>
      <div class="section">
      <h1>Serviços</h1>
      <table>
        <tr>
          
          <td>Data</td>
          <td>Horario</td>
          <td>Nome</td>
          <td>Contato</td>
          <td>CPF</td>
          <td>CEP</td>
          <td>Bairro</td>
          <td>Rua</td>
          <td>Numero</td>
          <td>Mensage</td>
          <td>Status</td>
        </tr>
        <?php while($dado = $con->fetch_array() ){ ?>
        <tr>
         
          <td><?php echo date("d/m/Y", strtotime($dado["dia"])); ?></td>
          <td><?php echo $dado["horario"]; ?></td>
          <td><?php echo $dado["nome"]; ?></td>
          <td><?php echo $dado["contato"]; ?></td>
          <td><?php echo $dado["cpf"]; ?></td>
          <td><?php echo $dado["cep"]; ?></td>
          <td><?php echo $dado["bairro"]; ?></td>
          <td><?php echo $dado["rua"]; ?></td>
          <td><?php echo $dado["numero"]; ?></td>
          <td><?php echo $dado["mensage"]; ?></td>
          <td><?php echo $dado["status"]; ?></td>
          <td><a class="apagar" href="excluir.php">Apagar</a></td>
          <td><a class="alterar" href="editar.php">Alterar</a></td>
          
        <?php } ?>
      </table>
      <p><a href="logout.php">Sair</a></p>
    </main>
    </div>
  </body>
</html>
