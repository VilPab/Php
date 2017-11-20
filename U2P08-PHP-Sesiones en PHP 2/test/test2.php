<?php
if(session_status() == PHP_SESSION_NONE) {
    session_name("idSesionRegistro");
    session_start();
}
if(!isset($_SESSION["jugador"])) {
    header("Location:registro.php");
}
if(isset($_SESSION["res2"])){
    header("Location:test3.php");
}

if(isset($_POST["respuesta2"])){
    if(strtolower($_POST["respuesta2"])=="adele"){
        $resultado2=1;
    }else{
        $resultado2=0;
    }

    $_SESSION["res2"]=$resultado2;
    header("Location:test3.php");
}

else{

    ?>
    <html>
    <header>
        <title>Segunda pregunta</title>
        <link href="../estilos/style.css" rel="stylesheet">
    </header>
    <body class="pregunta2">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
        ¿Quien canta Rolling in the deep?<br>
        <input type="text" name="respuesta2">
    </form>
    </body>
    </form>
    </html>
<?php  }