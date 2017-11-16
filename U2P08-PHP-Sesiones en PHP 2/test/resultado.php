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

if(isset($_SESSION["res1"],$_SESSION["res2"],$_SESSION["res3"]))
$resultados=$_SESSION["res1"]+$_SESSION["res2"]+$_SESSION["res3"];
?>
<html>
<header>
<title><?php if($resultados>2){echo "Ganador";}else{echo "Vuelve a intertarlo";}?></title>
   <link href="../estilos/style.css" rel="stylesheet">
</header>
<body>
<?php
if(isset($resultados)) {
    if($resultados>2){
        echo "<div class='contenedor'><div class='gana'>Enhorabuena ".$_SESSION["jugador"]." has ganado con " . $resultados . " respuestas acertadas</div></div>";
    }else{
        echo "<div class='contenedor'><div class='pierde'>Ohhhh la proxima vez sera ".$_SESSION["jugador"]." solo has conseguido " . $resultados . " respuestas acertadas</div></div>";
    }

}

?>
<p><a href="<?php echo $_SERVER['PHP_SELF']."?cerrarSesion=true"?>">Reiniciar el juego</a></p>


</body>
</html>
