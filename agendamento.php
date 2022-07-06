<?php
  include "conexao.php";

  
  $dia = $_POST['dia'];
  $horario = $_POST['horario'];
  $nome = $_POST['nome'];
  $contato = $_POST['contato'];
  $cpf = $_POST['cpf'];
  $cep = $_POST['cep'];
  $bairro = $_POST['bairro'];
  $rua = $_POST['rua'];
  $numero = $_POST['numero'];
  $mensage = $_POST['mensage'];

  $sql = "INSERT INTO agenda (dia, horario, nome, contato, cpf, cep, bairro, rua, numero, mensage) 
  VALUES ('$dia', '$horario', '$nome','$contato','$cpf', '$cep', '$bairro', '$rua', '$numero', '$mensage')";

      
$result = mysqli_query($mysqli,$sql); 

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
    <link rel="stylesheet" href="style/home.css" />

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
     
      <script>
        alert('O agendamento foi concluido!!!')
        window.location.href='index.html';
      </script>
       
    </main>
  </body>
</html>
