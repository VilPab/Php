<?php
/**
Antes de emitir código HTML
Inicializar la variable "mensajeError" vacía
Recuperar la sesión actual
Si el usuario ha enviado el formulario...
¿El campo de contraseña está vacío?
Sí: Actualizar la variable "mensajeError"
No: ¿Coincide la contraseña con la almacenada en la base de datos?
No: actualizar "mensajeError"
Sí: ¿surge error al intentar eliminar el usuario de la base de datos?
Sí: Actualizar la variable "mensajeError" con el atributo error del objeto "conexion"
No: redirigir a 'logout.php'
Después de emitir la cabecera HTML (sólo se llega hasta aquí si el usuario no envió el formulario, o bien lo envió pero surgieron errores, de lo contrario se habrá redirigido a logout.php)
Mostrar el formulario de confirmación de contraseña para proceder al borrado de la cuenta. El formulario será procesado por este mismo archivo.
Incluir un enlace para volver a index.php por si el usuario cambia de idea y no desea dar de baja la cuenta.
 */
include('connectionS.php');
$mensajeError='';
/**POST*/
$pass=(isset($_POST['pass'])? $_POST['pass']:'');

/**SESSION*/
session_start();
$user=$_SESSION['usuario'];


if(isset($_POST['enviar'])){

        if($pass==''){
            $mensajeError="Debe introducir la contraseña";
        }else{
            $resultado = $conexion->query('SELECT login, password FROM usuario WHERE login="'.$user.'"');
            if($resultado->num_rows==0){
                $mensajeError="El usuario y la contraseña no coinciden";
            }else {
                while ($usuario = $resultado->fetch_assoc()) {
                    if(password_verify($pass,$usuario['password'])){
                    $resultado->free_result();
                    $resultado = $conexion->query('DELETE FROM usuario WHERE login="' . $user . '"');
                    if ($conexion->connect_error) {
                        $mensajeError = "Ha surgido un problema con la base de datos";
                    } else {
                        $mensaje = "El usuario ha sido borrado con exito";
                        header('Location:logout.php');
                    }
                    }
                }
            }
        }
}
?>

<html>
<head>
    <title>Baja</title>
</head>
<body>
<h1>Eliminar cuenta de <?= $user; ?></h1>
<form action="baja.php" method="POST">
    Password:<input type="text" name="pass"><br>
    <input type="submit" name="enviar">
</form>
<p><?php if($mensajeError!='')echo $mensajeError;?></p><br>
<p>¿Quieres volver? Haz clic <a href="index.php">aquí </a>para volver.</p>

</body>
</html>

