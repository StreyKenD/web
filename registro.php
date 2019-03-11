<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

    <title>titulo</title>
</head>
<style>
    body{
        background-color: #ececf6;
    }
    div#interface{
        background-color:#c8cbcf;
        width:400px;
        margin:150px auto 10px auto;
        padding:25px 25px 25px 25px;
        border: 1px solid #b3b7bb;
        border-radius:20px;
    }
</style>
<body>
<div id="interface">
<form class="login" method="get" action="registrando.php">
    <section class="login">
        <p>Nome:<input class="form-control" type="text" name="nome" id="nome" size="20" maxlength="20" placeholder="Nome"/> </p>
        <p>Sobrenome:<input class="form-control" type="text" name="sobrenome" id="sobrenome" size="20" maxlength="20" placeholder="Sobrenome"/> </p>
        <p>Usuario:<input class="form-control" type="text" name="usuario" id="usuario" size="16" maxlength="16" placeholder="Usuario"/> </p>
        <p>E-mail:<input class="form-control" type="email" name="email" id="email" size="40" maxlength="40" placeholder="E-mail"/> </p>
        <p>Senha:<input class="form-control" type="password" name="senha" id="senha" size="16" maxlength="16" placeholder="Senha"/> </p>
        <input class="form-control" type="submit" value="cadastrar-se"/>
    </section>
</form>
</div>
<?php

?>
</body>
</html>
