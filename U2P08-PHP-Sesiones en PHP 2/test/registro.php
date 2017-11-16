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
    <html>
    <header>
        <link rel="stylesheet" href="../estilos/style.css">
    </header>
    <body>
    <div class="login">
        <div class="login-triangle"></div>

        <h2 class="login-header">Empezar Juego</h2>

    <div class="form">
    <form class="login-container" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
        Nombre:<input type="text" name="nombre">
    </form>
    </div>
</div>
    </body>
    </html>
<?php  }
?>




