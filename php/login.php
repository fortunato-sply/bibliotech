<?php
  session_start();
  include('connection.php');
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
        <?php if(isset($_SESSION['nao_autenticado'])): ?>
        <p id="danger">ERRO: Usuário ou senha inválida</p>
        <?php endif; unset($_SESSION['nao_autenticado']); ?>
        <form class="form-container" action="form.php" method="POST">
          <div class="input-box">
            <input type="text" name="user" required placeholder="Usuário" />
            <input type="password" name="password" required placeholder="Senha" />
          </div>
          <div class="button-box">
            <button class="form-button" name="login">Entrar</button>
            <a class="form-button" href="cadastro.php">Cadastre-se</a>
          </div>
        </form>
        <a href="#" id="forgot-password">Esqueci minha senha</a>
      </div>
      <div class="overlay">
        <p>B.</p>
      </div>
    </div>
  </section>
</body>
</html>