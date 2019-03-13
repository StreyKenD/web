<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seja Bem-vindo</title>
</head>
<body>
<?php
session_start();
$login = $_REQUEST['login'];
$password = $_REQUEST['password'];
$conn = mysqli_connect("127.0.0.1","root","","seti");
$sql = "SELECT * FROM usuarios WHERE Login = '".$login."'";
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if ($password == $row['Senha'] ) {
                $_SESSION['logged_in'] = 1;
                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $senha;
                header('location:logado.php');
        }
        else {
            $_SESSION['incpass'] = 1;
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('location:login.php');
            }
    }
}
else
    {
    $_SESSION['incnom'] = 1;
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:login.php');
}

?>
</div>
<form  class="login" method="post" action="login.php">
    <a class="usca" href="login.php">Voltar</a>
</form>
</body>
</html>
