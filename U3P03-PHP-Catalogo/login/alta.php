<?php
/**
Parte 4: Alta de nuevos usuarios: alta.php

Antes de emitir código HTML
Inicializar la variable "mensajeError" vacía
Si el usuario ha enviado el formulario...
¿El campo de nombre de usuario está vacío?
Sí: Actualizar la variable "mensajeError"
No: ¿El campo de contraseña está vacío?
Sí: Actualizar la variable "mensajeError"
No: ¿Existe ya en la base de datos un usuario con el mismo nombre de usuario?
Sí: Actualizar la variable "mensajeError"
No: ¿Sucede un error al intentar insertar el nuevo usuario en la base de datos?
Sí: Actualizar la variable "mensajeError" con el atributo error del objeto "conexion"
No: redirigir a 'login.php'
Después de emitir la cabecera HTML (sólo se llega hasta aquí si el usuario no ha enviado el formulario o bien lo envió pero hubo algún error, de lo contrario se habrá redirigido a login.php)
Mostrar un formulario de alta con campos para nombre, password, nombre completo, descripción, y tipo de cuenta (con un campo de tipo radio podrás elegir entre cuenta estándar o de administrador). El formulario será procesado por este mismo archivo.
Incluir un enlace a login.php con un texto parecido a este: ¿Ya tienes cuenta? Haz clic aquí para iniciar sesión.
Comentarios sobre el código: * Ten en cuenta que el usuario que uses para conectarte a la base de datos necesitará permisos de escritura * Puedes incluir operaciones de validación para restringir los nombres de usuario y contraseñas que se aceptan * En el código propuesto sólo exigimos valores no vacíos para nombre de usuario y contraseña, el resto se pueden dejar en blanco


 */
include('connectionS.php');
$mensajeError='';
$mensaje='';
/** POST */
session_start();
$user=(isset($_POST['user']) ?  $_POST['user']:'');
$pass=(isset($_POST['pass']) ?  $_POST['pass']:'');
$nombre=(isset($_POST['nombre']) ?  $_POST['nombre']:'');
$descripcion=(isset($_POST['descripcion']) ?  $_POST['descripcion']:'');
$tipoCuenta=(isset($_POST['tipo']) ?  $_POST['tipo']:'');
$admin=(isset ($_SESSION['admin']) ? $_SESSION['admin']:'');
$login=(isset ($_SESSION['login']) ? $_SESSION['login']:'');
if($admin!=1 or $login==0){
    header('Location:index.php');
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($user==''){
        $mensajeError="El nombre de usuario no se ha introducido";
    }else{
        if($pass==''){
            $mensajeError="La contraseña no se ha introducido";
        }else{
            $resultado= $conexion->query('SELECT login FROM usuario WHERE login="'.$user.'"');
            if($resultado->num_rows!=0){
                $mensajeError="El usuario ya existe";
            }else{
                $resultado->free_result();
                $passwordHash = password_hash($pass, PASSWORD_DEFAULT);
                $resultado=$conexion->query( 'INSERT INTO usuario (admin,descripcion,login,nombre,password) VALUES("'.$tipoCuenta .'","'.$descripcion.'","'.$user.'","'.$nombre.'","'.$passwordHash.'")');
                if($conexion->connect_error){
                    $mensajeError="Ha fallado la conexion";
                }else
                $mensaje="Se ha introducido el usuario correctamente";
            }
        }
    }
}
?>
<html>
<head>
    <title>Alta</title>
</head>
<body>
<h1>Alta de usuarios</h1>
<form action="alta.php" method="POST">
    User:<input type="text" name="user"><br>
    Password:<input type="text" name="pass"><br>
    Nombre Completo:<input type="text" name="nombre"><br>
    Descripción:<input type="text" name="descripcion"><br>
    Admin:<br>
    Si<input type="radio" name="tipo" value="1">
    No<input type="radio" name="tipo" value="0">
    <input type="submit" name="enviar">
</form>
<p><?php if($mensajeError!='')echo $mensajeError;?></p><br>
<p><?php if($mensaje!='')echo $mensaje;?></p><br>
<p>¿Ya tienes cuenta? Haz clic <a href="login.php">aquí </a>para iniciar sesión.</p>

</body>
</html>
