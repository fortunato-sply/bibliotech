<?php

session_start();
include("connection.php");
$connection = returnConnection();

$userId = $_SESSION['userId'];
$livro = $_POST['livro'];
$data_dev = $_POST['data_dev'];

$sql = "INSERT INTO emprestimos(idUser, livro, data_emp, data_dev) 
    values('$userId', '$livro', CURDATE(), '$data_dev')";

if($connection->query($sql) === true){
  $_SESSION['livro_cadastrado'] = true;
}

$connection->close();

header('Location: emprestar.php');
exit;
?>