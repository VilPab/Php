<html>

<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/**
 *Pedir al usuario dos números A y B entre el 1 y el 10.
 * Escribir en pantalla tantos asteriscos como diferencia
 * haya entre los números (resolviéndolo con while, mientras
 * uno sea menor que otro se escribe asterisco) y repetir con
 * almohadillas (resolviéndolo con for utilizando la diferencia
 * entre a y b como número de repeticiones).
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
            Numero1:<input type="number" name="numero1"><br>
            Numero2:<input type="number" name="numero2"><br>
            <input type="submit" name="enviar">
        </form>
    <?php } else {
        $n1= $_POST["numero1"];
        $n2= $_POST["numero2"];
        if(($n1>=10 || $n1<=0 ) && ($n2>=10 || $n2<=0 )) {
            echo "<p>Tienen que ser valores entre el 1 y el 10</p>";
            die;
        }else{
            if ($_POST["numero1"] > $_POST["numero2"]) {
                $a = $_POST["numero1"];
                $b = $_POST["numero2"];

            } else {
                $a = $_POST["numero2"];
                $b = $_POST["numero1"];
            }
            $control = $b;
            while ($a > $control) {
                echo '*';
                $control++;
            }
            echo "<br>";
            for ($i = $b; $i < $a; $i++) {
                echo '#';
            }

        }


}
?>



<br>
<a href="index.php">Volver</a>

</body>
</html>