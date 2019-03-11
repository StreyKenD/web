<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seja Bem-vindo</title>
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
    }
    fieldset.login{
        border: 1px solid #b3b7bb;
        border-radius:20px;
        margin:5px;
        padding:15px 15px 15px 15px;
    }
</style>
<body>
<?php
$login = $_REQUEST['login'];
$password = $_REQUEST['password'];
$conn = mysqli_connect("127.0.0.1","root","","seti");
$sql = "SELECT * FROM usuarios WHERE Login = '".$login."'";
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
      if ($password == $row['Senha'] ){
          if($row['Logado'] == '0'){
              header("Location: logado.php?login=".$login."&click=0");
              $sql = "UPDATE usuarios SET Logado = 1 WHERE Login = '".$login."'";
              $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

          }
          else
              echo '<div id="interface">';
              echo('Usuario ja online');
              echo '</div>';
      }
      else
          echo '<div id="interface">';
          echo('Senha incorreta');
          echo '</div>';

    }
}

?>
</div>
<form  class="login" method="get" action="login.php">
    <a class="usca" href="login.php">Voltar</a>
</form>
</body>
</html>
