<?php

if(session_status() == PHP_SESSION_NONE) {
    session_name("idSesionRegistro");
    session_start();
}
if(isset($_SESSION["jugador"])){

    header("Location:index.php");
}


if(isset($_POST["nombre"])) {
    $_SESSION['jugador']=$_POST["nombre"];
    header("Location:index.php");
}

else{
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
        Nombre:<input type="text" name="nombre">
    </form>
<?php  }
?>