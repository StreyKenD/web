<?php
$conn = mysqli_connect("127.0.0.1","root","","seti");
$sql = "SELECT Nome,Sobrenome,Login,Email,Senha FROM usuarios";
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));






?>