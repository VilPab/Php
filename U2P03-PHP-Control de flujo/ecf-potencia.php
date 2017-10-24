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
        Numero1:<input type="number" name="numero1"><br>
        Numero2:<input type="number" name="numero2"><br>
        <input type="submit" name="enviar">
    </form>
<?php } else {
        $resultado=$_POST["numero1"];
        for($i=1;$i<$_POST["numero2"];$i++){

            $resultado*=$_POST["numero1"];
        }
    echo "<p>El resultado de ".$_POST["numero1"]." elevado a ".$_POST["numero2"]." es $resultado</p> <br>";
}
?>

<a href="index.php">Volver</a>
</body>
</html>