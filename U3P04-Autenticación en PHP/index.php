<!--##### Parte 2: Contenido de la aplicación: index.php
* Antes de emitir código HTML
* Inicializar la variable $mensajeError vacía
* Recuperar la sesión actual
* Si la variable de sesión *login* no tiene valor 1, redirigir a `login.php`
* Después de emitir la cabecera HTML (sólo se llega hasta aquí si hay sesión iniciada, gracias al punto anterior, de lo contrario se habrá redirigido a `login.php`))
* ¿Se encuentra en la base de datos el usuario que ha iniciado sesión?
* No: redirigir a `logout.php`. ¿Se te ocurre en qué caso podría ocurrir esto? La respuesta está más abajo.
* Sí:
* Obtener su nombre completo de la base de datos (y si lo deseas, la descripción o el tipo de cuenta)
* Mostrar un mensaje de bienvenida al usuario dirigiéndonos a él por su nombre completo
* Incluir un enlace para cerrar sesión, dirigido a `logout.php`
* Incluir un enlace para eliminar la cuenta, dirigido a `baja.php`-->

<?php
include "connection.php";
$mensajeError='';

session_start();
$login=(isset($_SESSION['login']) ? $_SESSION['login']:'');
$user=(isset($_SESSION['usuario']) ? $_SESSION['usuario']:'');


if($login!=1) header('Location:login.php');
$resultado= $conexion->query('SELECT * from usuario WHERE login="'.$user.'"');
if($resultado->num_rows==0) header('Location:logout.php');

?>


<html>
<head>
    <title>Inicio</title>
</head>
<body>


<?php  while ($usuario = $resultado->fetch_assoc()) : ?>
        <h1>Bienvenido <?= $usuario['nombre']; ?></h1>
        <p>Descripcion:<?= $usuario['descripcion']; ?></p>
        <p>Login:<?= $usuario['login']; ?></p>

<?php endwhile; ?>
<a href="logout.php">Cerrar Sesion</a>
<a href="baja.php">Eliminar cuenta</a>

</body>
</html>



