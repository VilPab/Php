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
        Numero:<input type="number" name="numero"><br>
        <input type="submit" name="enviar">
    </form>
<?php } else {
    $total=0;
    for($i=0;$i<$_POST["numero"];$i++){
        $total+=$i;
    }
    echo "<p>Suma total $total </p></br>";
     }

   ?>

<a href="index.php">Volver</a>
</body>
</html>