<html>

<head>
    <meta charset="utf-8">
</head>
<body>
<?php
if (!isset($_POST['enviar'])) {
    ?>

    <?php
    if (isset($_POST['numero1']) && !is_numeric($_POST['numero1']))  {
        echo 'No es un numero';
        die;
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
        Numero:<input type="number" name="numero1"><br>
        <input type="submit" name="enviar">
    </form>
<?php } else {
    $resultado=0;
    for($i=1;$i<=10;$i++){
        $resultado=$_POST["numero1"]*$i;
        echo "<p>".$_POST['numero1']." X ".$i." = $resultado </p><br>";

    }
}
?>

<a href="index.php">Volver</a>
</body>
</html>