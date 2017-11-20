<?php
/*Crea un archivo `saludo.php` y codifica un único archivo PHP con el siguiente comportamiento:
   * Si no hay sesión iniciada, se mostrará un formulario para pedir nuestro nombre.
Al enviar el formulario se iniciará una sesión almacenando el nombre como variable de sesión
* Si hay sesión iniciada, se mostrará un texto como este: *Damos la bienvenida a Alberto**/

if(session_status() == PHP_SESSION_NONE) {
    session_name("idSesionSaludo");
    session_start();
    $mensaje="Sesion no iniciada";
}
if(isset($_POST["nombre"])) {
    $_SESSION['name']=$_POST["nombre"];
    $mensaje="Damos la bienvenida a ".$_SESSION['name'];

}else{
    $mensaje="Sesion no iniciada";
}
if (isset($_REQUEST["cerrarSesion"])) {
    $_SESSION=array();
    session_unset();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
}
?>


<?php
if(isset($_SESSION["name"])){
    $mensaje="Damos la bienvenida a ".$_SESSION['name'];
    echo $mensaje;?>
    <p><a href="<?php echo $_SERVER['PHP_SELF']."?cerrarSesion=true"?>">Cerrar sesión</a></p>
    <?php
    }
    else{?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
            Nombre:<input type="text" name="nombre">
</form>
  <?php  }
?>