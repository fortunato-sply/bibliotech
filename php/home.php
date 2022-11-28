<?php
session_start();
include('connection.php');
$connection = returnConnection();
if(!verifyLogin())
  header('Location: login.php')
?>
<!DOCTYPE html>
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
          <li><a href="#">Home</a></li>
          <li><a href="emprestar.php">Emprestar</a></li>
          <li><a href="perfil.php">Meu perfil</a></li>
          <li><a href="logout.php">Sair</a></li>
        </div>
      </ul>
    </div>
  </nav>
  <table>
    <tr>
      <th>Livro</th>
      <th>Data do empréstimo</th>
      <th>Data de devolução</th>
      <th>Ações</th>
    </tr>
    <?php
    $sql = "select * from emprestimos where idUser = '$_SESSION[userId]'";
    $query = mysqli_query($connection, $sql);

    while($row = mysqli_fetch_assoc($query)){
      echo"<tr>
        <td>". $row['livro']."</td>
        <td>". date("d/m/y", strtotime($row['data_emp']))."</td>
        <td>". date("d/m/y", strtotime($row['data_dev']))."</td>
        <td>
          <a href='delete.php?id=$row[id]'>
          <i class='fa-solid fa-trash'></i> 
          </td>
        </tr>";        
    }
    ?>
  </table>
</body>
</html>