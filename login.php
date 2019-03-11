<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>titulo</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

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
<div id="interface">
<form class="login" method="get" action="logando.php">
    <fieldset class="login">
        <div class="form-group">
            Usuario:<input class="form-control" type="text" name="login" maxlength="16" placeholder="Usuário"><br/>
        </div>
        <div class="form-group">
            Senha:<input class="form-control" type="password" name="password" placeholder="Senha"/><br/>
        </div>
            <div class="form-group">
            <div class="form-check">
            <!--<input type="checkbox" class="form-check-input" id="checkbox">Lembre-se de mim-->
        </div>
    </div>
    <input class="btn btn-primary" type="submit" value="login">
</form>
<div class="dropdown-divider"></div>
    <!--<a class="dropdown-item" href="">Esqueceu a senha?</a>-->

    <form method="get" action="registro.php">
        <!--<input class="btn btn-primary" type="submit" value="Cadastrar-se"/> Botao antigo-->
    <a class="dropdown-item" href="registro.php">Novo por aqui? Registre-se</a>
</form>
    </fieldset>
</div>
</body>
</html>
