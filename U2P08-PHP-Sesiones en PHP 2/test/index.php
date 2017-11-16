<?php
session_name("idSesionRegistro");
session_start();
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
if(!isset($_SESSION["jugador"])) {
    header("Location:registro.php");
}

?> <html>
    <body>
    <header>
        <link rel="stylesheet" href="../estilos/style.css">
    </header>
    <div class="login">
        <div class="login-triangle"></div>

        <h2 class="login-header">  <?php
            echo "Bienvenido ".$_SESSION["jugador"];
            ?></h2>
        <div class="form">

    <br>
    <a href="test1.php" style="margin-left: 135px;">Empezar el juego</a>
            <p><a href="<?php echo $_SERVER['PHP_SELF']."?cerrarSesion=true"?>" style="margin-left: 125px;">Reiniciar el juego</a></p>
    </div>
    </div>
    </body>
</html>

