<?php
include('connection.php');
session_start();

$user=(isset($_POST['user']) ?  $_POST['user']:'');
$pass=(isset($_POST['pass']) ?  $_POST['pass']:'');
$login=(isset($_SESSION['login']) ? $_SESSION['login']:0);

if($login==1) header('Location:index.php');

$mensajeError='';


if(isset($_POST['enviar'])){
   // $resultado = $conexion->query('SELECT login,password,admin FROM usuario WHERE login="'.$user.'" AND password="'.$pass.'"');
    $resultado = $conexion->query('SELECT login,password FROM usuario WHERE login="'.$user.'"');
    if($resultado->num_rows!=0) {
        while ($usuario = $resultado->fetch_assoc()) {
            if (password_verify($pass, $usuario['password'])) {
                $_SESSION['usuario'] = $user;
                $_SESSION['password'] = $pass;
                $_SESSION['login'] = 1;
                header('Location:index.php');
            }else{
                $mensajeError = "El usuario y contraseña son erroneos, intentelo de nuevo";
            }
        }
    }else {
        $mensajeError = "El usuario y contraseña son erroneos, intentelo de nuevo";
    }


}
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="login.php" method="POST">
    User:<input type="text" name="user">
    Password:<input type="text" name="pass">
    <input type="submit" name="enviar">
</form>
<p><?php if($mensajeError!='')echo $mensajeError;?></p>

</body>
</html>
