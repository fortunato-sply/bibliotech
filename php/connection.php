<?php
function returnConnection(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "bibliotech";
    
    return new mysqli($host, $user, $password, $database);
}

function verifyLogin(){
    if (session())
        return false;
    
    $mysqli = returnConnection();
    $user = $_SESSION['loginUser'];
    $pass = $_SESSION['passUser'];
    $result  = $mysqli -> query("SELECT * FROM user WHERE user = '$user' and password = '$pass'");
    if ($result->num_rows > 0)
    {
        $row =  mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['name'];
        $_SESSION['userId'] = $row['id'];
        return true;
    }
    return false;
}

function session(){
    if (isset($_SESSION['loginUser']) && isset($_SESSION['passUser']) && $_SESSION['loginUser'] != "" && $_SESSION['passUser'] != "")
        return false;
    $_SESSION['loginUser'] = "";
    $_SESSION['passUser'] = "";
    return true;
        
}

function Error404()
{
    echo "<meta http-equiv='refresh' content='0.00001; URL=../user/404error.php'/>";
}

function redirectLogin()
{
    echo "<meta http-equiv='refresh' content='0.00001; URL=../user/login.php'/>";
}
?>