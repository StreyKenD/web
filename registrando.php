<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <title>Cadastro</title>
</head>

<style>
    body{
        background-color: #d7d7e1;
    }
    div#interface{
        background-color:#c8cbcf;
        width:300px;
        margin:50px auto 10px auto;
        padding:10px 10px 10px 10px;
        border: 1px solid #b3b7bb;
        border-radius:20px;
    }
</style>

<body>
<?php
    $nome=$_REQUEST["nome"];
    $sobrenome=$_REQUEST["sobrenome"];
    $usuario=$_REQUEST["usuario"];
    $email=$_REQUEST["email"];
    $senha=$_REQUEST["senha"];
    $conn = mysqli_connect("127.0.0.1","root","","seti");
    $sql = "SELECT * FROM usuarios WHERE Login = '".$usuario."'";
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    if(mysqli_num_rows($result) > 0) {
        echo '<div id="interface">';
        echo"<a>Usuário já cadastrado</a>";
        echo '</div>';
    }
    else{
       $sql = "INSERT INTO usuarios(Nome,Sobrenome,Login,Email,Senha) VALUE('$nome','$sobrenome','$usuario','$email','$senha')";
       $result= mysqli_query($conn, $sql);
       echo '<div id="interface">';
       echo"<a>Sua conta foi cadastrada com sucesso</a>";
       echo '</div>';
    }
    ?>
<div id="interface">
<form  class="login" method="get" action="login.php">
    <a class="dropdown-item" href="login.php">Voltar</a>
</form>
</div>
</body>
</html>
