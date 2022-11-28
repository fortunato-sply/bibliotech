<?php
include_once("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../img/logo.png" type="img/logo.png"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/global.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/emprestar.css">
  <title>Emprestar novo livro</title>
</head>
<body>
  <nav class="navbar">
    <div class="nav-box">
      <div class="left-nav">
        <img class="logo" src="../img/logo.png">
        <p>bibliotech</p>
        <p><i class="fa-solid fa-user username"></i> <?php echo $_SESSION['username']?></p>
      </div>
      <ul class="nav-links">
        <div class="menu">
          <li><a href="home.php">Voltar</a></li>
          <li><a href="perfil.php">Meu perfil</a></li>
          <li><a href="logout.php">Sair</a></li>
        </div>
      </ul>
    </div>
  </nav>
  <section class="main">
    <div class="container">
      <div class="colored-box">
        <span>Emprestar</span>
      </div>
      <form method="POST" action="verifyemprestimo.php">
        <div class="label-box">
          <label>Nome do livro</label>
          <input name="livro" type="text" required placeholder="Percy Jackson">
        </div>
        <div class="label-box">
          <label>Data de devolução</label>
          <input name="data_dev" type="date" required>
        </div>
        <button type="submit">Concluir</button>
      </form>
      <?php if(isset($_SESSION['livro_cadastrado'])): ?>
      <a id="success" href="home.php">Livro emprestado com sucesso!<br>Clique para retornar</a></p>
      <?php endif; unset($_SESSION['livro_cadastrado']); ?>
    </div>
  </section>
</body>
<script src="https://kit.fontawesome.com/fe30f843d3.js" crossorigin="anonymous"></script>
</html>
