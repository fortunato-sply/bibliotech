<?php

if (isset($_POST["login"]))
{
    session_start();
    require_once("connection.php");
    $_SESSION['loginUser'] = $_POST['user'];
    $_SESSION['passUser'] = $_POST['password'];


    $confirm = verifyLogin();
    if ($confirm)
    {    
        echo "<meta http-equiv='refresh' content='0.00001; URL=home.php'/>";
    }
    else
    {
        $_SESSION['nao_autenticado'] = true;
        echo "<meta http-equiv='refresh' content='0.00001; URL=login.php'/>";
    }
}
?>