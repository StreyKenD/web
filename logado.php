<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    if(! empty($_SESSION['logged_in']))
    {
        ?>
    <p>here is my super-secret content</p>
    <a href="deslogando.php">Click here to log out</a>
    <?php
    }
    else
        {
            echo'You are not logged in. <a href="login.php">Click here</a> to log in.';
        }
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:login.php');
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Seja Bem-vindo</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<style>
    body{
        background-color: #d7d7e1;
    }

    div#interface{
        background-color:#c8cbcf;
        width:600px;
        margin:15px auto 10px auto;
        padding:30px 30px 30px 30px;
        border: 1px solid #b3b7bb;
        border-radius:20px;
    }

</style>
<div id="interface">
<body>
    <?php
        $nick = $_SESSION['login'];
        echo "Seja Bem-vindo! A summoners Dryft! $nick</br>";
    $conn = mysqli_connect("127.0.0.1","root","","seti");
    $sql = "SELECT Nome,Sobrenome,Login,Email,Senha FROM usuarios";
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)){
        $int = "0";
            foreach($row as $item => $value){
                $int += 1;
                echo"$item";
                $div = gmp_div_r("$int","5");
                if($int == 0){
                    echo"<form class=\"login\" method=\"get\" action=\"login.php\">";
                }
                if (gmp_strval($div)=="0"){
                    echo"<input class=\"form-control\" name=\"$item$int\" type=\"text\" value=\"$value\"/><br/>";
                    echo"<form/>";
                }
                else{
                    echo"<input class=\"form-control\" name=\"$item$int\" type=\"text\" value=\"$value\"/>";
                }
            }
        echo'<input  class="btn btn-primary" type="submit" value="Salvar"/><br/><br/>';
    }
    ?>
</div>
</body>
</html>
