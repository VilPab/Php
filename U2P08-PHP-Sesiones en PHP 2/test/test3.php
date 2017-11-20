<?php
if(session_status() == PHP_SESSION_NONE) {
    session_name("idSesionRegistro");
    session_start();
}
if(!isset($_SESSION["jugador"])) {
    header("Location:registro.php");
}
if(isset($_SESSION["res3"])){
    header("Location:resultado.php");
}

if(isset($_POST["respuesta3"])){
    if(strtolower($_POST["respuesta3"])=="hermann hesse"){
        $resultado3=1;
    }else{
        $resultado3=0;
    }

    $_SESSION["res3"]=$resultado3;
    header("Location:resultado.php");
}

else{
    ?>
    <html>
    <header>
        <title>Tercera pregunta</title>
        <link href="../estilos/style.css" rel="stylesheet">
    </header>
    <body class="pregunta3">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
        ¿Quien escribio El Lobo Estepario?<br>
        <input type="text" name="respuesta3">
    </form>
    </body>
    </form>
    </html>
<?php  }