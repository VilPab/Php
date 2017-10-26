<html>

<head>
    <meta charset="utf-8">
</head>
<body>
 <?php
if(!isset($_POST["enviar"])) {
    $_POST["oculto"] = 0;
    $_POST["numero"] = 0;
}

if($_POST["oculto"]<50 ) {

    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
        Numero:<input type="number" name="numero"><br>
        <?php $acum = $_POST["numero"]+$_POST["oculto"];  ?>
        <input type="hidden" name="oculto" value=<?php echo $acum ?>>
        <input type="submit" name="enviar">
    </>
    <?php



}else {

    echo "<p>El acumulador a llegado a 50</p>";

}



?>

<a href="index.php">Volver</a>

</body>
</html>