<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../img/logo.png" type="img/logo.png"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/global.css">
  <link rel="stylesheet" href="../css/login.css">
  <title>Login</title>
</head>
<body>
  <section class="container">
    <div class="main-box">
      <div class="login-content">
        <div class="login-header">
          <img src="../img/logo.png" alt="">
          <h1>bibliotech</h1>
        </div>
        <form class="form-container" action="verifycadastro.php" method="POST">
          
          <div class="input-box">
          <input type="text" name="name" required placeholder="Nome" />
            <input type="text" name="user" required placeholder="Usuário" />
            <input type="password" name="password" required placeholder="Senha" />
          </div>
          <div class="button-box">
            <button class="form-button" name="cadastrar">Cadastrar</button>
            <a class="form-button" href="login.php">Voltar</a>
          </div>
        </form>
        <?php if(isset($_SESSION['status_cadastro'])): ?>
        <div id='success'><a href='login.php' id='success'>Sucesso! Prosseguir para login</a></div>
        <?php endif; unset($_SESSION['status_cadastro']); ?>
        <?php if(isset($_SESSION['usuario_existe'])): ?>
        <div id='danger'>Erro: Usuário já cadastrado.</div>
        <?php endif; unset($_SESSION['usuario_existe']); ?>
      </div>
      <div class="overlay">
        <p>B.</p>
      </div>
    </div>
  </section>
</body>
</html>