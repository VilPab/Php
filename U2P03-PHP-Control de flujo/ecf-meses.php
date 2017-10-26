<?php
/*En un formulario se recogerá un valor en un cuadro de texto
y un radio group para indicar si el año actual es bisiesto o no.
Habrá que comprobar si el valor leído corresponde al número de un mes (de 1 a 12)
o a su nombre (“enero”, “febrero”). Si es así se mostrará el número de días que tiene
ese mes, y si no es así se mostrará un error.
Nota:para comparar String, busca referencia de las funciones strcmp y strcasecmp.

*/
?>
    <html>

    <head>
        <meta charset="utf-8">
    </head>
<body>
<?php
if (!isset($_POST['enviar'])) {
    ?>

    <?php
    if (isset($_POST['cadena']))  {
        echo 'No es una cadena';
        die;
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
        Cadena:<input type="text" name="cadena"><br>
        Bisisesto:<input type="radio" value="si"name="bisiesto"><br>
        <input type="submit" name="enviar">
    </form>
<?php } else {
    if(!isset($_POST["bisiesto"])){
       $bisiesto="no";
    }
    $mesB=false;
    $mesN=false;
    $cadena=$_POST["cadena"];
    $bisiesto=$_POST["bisiesto"];
    $meses = array("Enero" => 31, "Febrero" => 28, "Marzo" => 31, "Abril" => 30, "Mayo" => 31, "Junio" => 30,
        "Julio" => 31, "Agosto" => 31, "Septiembre" => 30, "Octubre" => 31, "Noviembre" => 30,
        "Diciembre" => 31,);
    $mes = array(31,28,31,30,31,30,31,31,30,31,30,31);
    foreach($meses as $clave=> $elemento){
        if (strcasecmp($_POST["cadena"], $clave) !== 0) {

        }else{
            if(strcasecmp($bisiesto,"si")==0){
                echo "<p>El mes $clave tiene ".($elemento+1)." dias</p><br>";
                $mesB=true;
            }else{
            echo "<p>El mes $clave tiene $elemento dias</p><br>";
            $mesB=true;}
        }
    }
        if(!$mesB) {
                if(is_numeric($_POST["cadena"])){

                        if ($cadena<=12 && $cadena>0) {
                                if(strcasecmp($bisiesto,"si")==0) {
                                    $dias=$mes[$_POST["cadena"]-1 ]+1;
                                    echo "<p> El mes " . $_POST["cadena"] . " tiene " . $dias . " dias";
                                    $mesN = true;
                                }else{
                                    echo "<p> El mes " . $_POST["cadena"] . " tiene " . $mes[$_POST["cadena"]-1 ] . " dias";
                                    $mesN = true;
                                }


                    }
                }


        }
        if(!$mesN && !$mesB){
        echo "<p>No es ningun mes valido</p>";
        }


}
?>

<a href="index.php">Volver</a>
</body></html>