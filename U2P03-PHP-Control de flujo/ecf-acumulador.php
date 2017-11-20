<html>

<head>
    <meta charset="utf-8">
</head>
<body>
 <?php
if(isset($_POST["enviar"])) {
    $acum=$_POST["oculto"]+$_POST["numero"] ;

}else{
    $acum = 0;
}

if($acum<50 ) {

    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
        Numero:<input type="number" name="numero"><br>
        <input type="hidden" name="oculto" value=<?php echo $acum ?>>
        <input type="submit" name="enviar">
        <p>Acumulado <?php echo $acum ?> </p>

    </>
    <?php



}else {

    echo "<p>El acumulador a llegado a 50</p>";

}



?>

<a href="index.php">Volver</a>

</body>
</html>