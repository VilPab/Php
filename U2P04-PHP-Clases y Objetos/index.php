<html>
<head>

</head>
<body>

<?php
include ("cuadrado.php");
if (!isset($_POST['enviar'])) {

    if (isset($_POST['numero1']) && !is_numeric($_POST['numero1']))  {
        echo 'No es un numero';
        die;
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
        Lado:<input type="number" name="numero1"><br>
        <input type="submit" name="enviar">
    </form>
<?php } else {

    $cuadrado1 = new cuadrado($_POST["numero1"]);
    echo "El lado del cuadrado es ".$cuadrado1->getLado();
    echo "El area del cuadrado es ".$cuadrado1->calcularArea();
}
?>
</body>
</html>
