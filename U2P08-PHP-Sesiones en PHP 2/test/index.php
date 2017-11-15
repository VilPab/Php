<?php
session_name("idSesionRegistro");
session_start();
if(!isset($_SESSION["jugador"])) {
    header("Location:registro.php");
}

    echo "Bienvenido ".$_SESSION["jugador"];
    ?>
    <a href="test1.php">Empezar el juego</a>

