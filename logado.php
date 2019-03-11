<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Seja Bem-vindo</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<style>
    body{
        background-color: #ececf6;
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
        $login=$_GET["login"];
        echo "Seja Bem-vindo! A summoners Dryft! $login&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        $clicado=$_GET['click'];
        echo'<input class="btn btn-primary" type="submit" id="sair" value="Sair" onclick="window.location.href=`?click=1&login='.$login.'`"/><br/>';
        $nome=$login;
        if ($clicado == '1'){
            header("Location: deslogando.php?nome=".$nome."");
        }
    $conn = mysqli_connect("127.0.0.1","root","","seti");
    $sql = "SELECT Nome,Sobrenome,Login,Email,Senha FROM usuarios";
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)){
        $int = "0";
            foreach($row as $item => $value){
                $int += 1;
                echo"$int";
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