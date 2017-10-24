<html>

<head>
    <meta charset="utf-8">
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: alumno
 * Date: 24/10/17
 * Time: 12:59
 */
if (!isset($_POST['enviar'])) {
    ?>

    <?php
    if (isset($_POST['numero1']) && !is_numeric($_POST['numero1']))  {
        echo 'No es un numero';
        die;
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
        Numero:<input type="number" name="numero"><br>
        <input type="submit" name="enviar">
    </form>
<?php } else {

     $factorial=1;
    for($i=1;$i<=$_POST["numero"];$i++){
        $factorial*=$i;
    }

    echo "<p>El factorial de ".$_POST["numero"]." es $factorial</p></br>";

}
?>

<a href="index.php">Volver</a>

</body>
</html>