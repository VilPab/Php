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
        $numero=$_POST["numero"];

        echo "<table border='1' style='border-color: black;'>";


        for($i=1;$i<=$numero;$i++){
            if($i%2==0){
                echo"<tr style='background: lightgray;'>";

            }
            else{
                echo"<tr style='background: lightblue;'>";
            }
            for($x=1;$x<=$numero;$x++){

                    echo "<td style='padding: 0.3cm;'>".($x*$i)."</td>";

            }
            echo "</td>";
        }



}
?>

<a href="index.php">Volver</a>

</body>
</html>