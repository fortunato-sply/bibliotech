<?php
session_start();
include_once('connection.php');
$connection = ReturnConnection();

if(!empty($_GET['id']))
{
    $id = $_GET['id'];
    $userId = $_SESSION['userId'];

    $sql = "SELECT * from emprestimos where idUser = '$userId' and id = '$id'";
    $query = mysqli_query($connection, $sql);

    if($query->num_rows > 0)
    {
        $deletesql = "DELETE FROM emprestimos WHERE idUser = '$userId' and id = '$id'";
        $result = mysqli_query($connection, $deletesql);
    }
}
header('Location: home.php');
?> 