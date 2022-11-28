<?php
session_start();
include("connection.php");
$connection = returnConnection();

$name = mysqli_real_escape_string($connection, trim($_POST['name']));
$user = mysqli_real_escape_string($connection, trim($_POST['user']));
$password = mysqli_real_escape_string($connection, trim($_POST['password']));


$sql = "select count(*) as total from user where user ='$user'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
  $_SESSION['usuario_existe'] = true;
  header('Location: cadastro.php');
  exit;
}

$sql= "INSERT INTO user(user, password, name) 
  values('$user', '$password', '$name')";

if($connection->query($sql) === true){
    $_SESSION['status_cadastro'] = true;
}

$connection->close();

header('Location: cadastro.php');
exit;
?>