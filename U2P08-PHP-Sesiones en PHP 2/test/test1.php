<?php
session_name("idSesionRegistro");
session_start();
if(!isset($_SESSION["jugador"])) {
    header("Location:registro.php");
}
if(isset($_SESSION["res1"])){
    header("Location:test2.php");
}

if(isset($_POST["respuesta1"])){
    if(strtolower($_POST["respuesta1"])=="juego de tronos"){
        $resultado1=1;
    }else{
        $resultado1=0;
    }

    $_SESSION["res1"]=$resultado1;
    header("Location:test2.php");
}

else{
    ?>
    <html>
    <header>
    <title>Primera pregunta</title>
        <link href="../estilos/style.css" rel="stylesheet">
    </header>
    <body class="pregunta1">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
        ¿En que serie aparecen los caminantes blancos?
        Respuesta:<input type="text" name="respuesta1">
    </body>
    </form>
    </html>
<?php  }