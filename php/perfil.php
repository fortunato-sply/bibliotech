<?php
session_start();
include_once("connection.php");
$connection = returnConnection();
?>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../img/logo.png" type="img/logo.png"/>
  <script src="https://kit.fontawesome.com/fe30f843d3.js" crossorigin="anonymous"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/global.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/home.css">
  <title>bibliotech</title>
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
          <li><a href="home.php">Home</a></li>
          <li><a href="emprestar.php">Emprestar</a></li>
          <li><a href="#">Meu perfil</a></li>
          <li><a href="logout.php">Sair</a></li>
        </div>
      </ul>
    </div>
  </nav>
  <table>
    <tr>
      <th>Nome</th>
      <th>Usuário</th>
      <th>Senha</th>
    </tr>
    <?php
    $sql = "select * from user where id = '$_SESSION[userId]'";
    $query = mysqli_query($connection, $sql);

    while($row = mysqli_fetch_assoc($query)){
      echo"<tr>
        <td>". $row['name']."</td>
        <td>". $row['user']."</td>
        <td>". $row['password']."</td> 
        </tr>";        
    }
    ?>
  </table>
</body>
</html>