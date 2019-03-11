<?php
    $nome=$_REQUEST['nome'];
    $conn = mysqli_connect("127.0.0.1","root","","seti");
    $sql = "UPDATE usuarios SET Logado = 0 WHERE Login = '".$nome."'";
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    header("Location: login.php");
?>
