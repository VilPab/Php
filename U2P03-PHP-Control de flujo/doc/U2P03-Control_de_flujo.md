###### *Desarrollo Web en Entorno Servidor - Curso 2017/2018 - IES Leonardo Da Vinci - Alberto Ruiz*
## U2P03 - Control de flujo
#### Entrega de: *Pablo Villar García*
----
#### 1. Descripción:

Vamos a practicar las sentencias de control de flujo en PHP

#### 2. Formato de entrega:

Este u otro documento en el que se incluya el codigo fuente del archivo o archivos generados, así como una captura de pantalla de una ejecución.

#### 3. Trabajo a realizar:

Crea un nuevo proyecto PHP *U2P03-PHP-Control de flujo* que consistirá en una página web “index.php” o “index.html” con enlaces a las siguientes páginas, que resolverán diferentes problemas. En cada una de las páginas se incluirá un enlace “Volver” para regresar a la página principal.

##### Parte 1: “ecf-diferencia.php”


Pedir al usuario dos números A y B entre el 1 y el 10. Escribir en pantalla tantos asteriscos como diferencia haya entre los números (resolviéndolo con while, mientras uno sea menor que otro se escribe asterisco) y repetir con almohadillas (resolviéndolo con for utilizando la diferencia entre a y b como número de repeticiones).

```php

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
```


##### Parte 2: “ecf-suma.php”

Pedir un número X y calcular la suma de los X primeros números naturales (1 + 2 + 3 + …).

```php
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
```

##### Parte 3: “ecf-potencia.php”

Pedir dos números A y B y calcular la potencia A elevado a B utilizando iteraciones (no una función matemática predefinida).

```php
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
    echo "<p>El resultado de ".$_POST["numero1"]." elevado a ".$_POST["numero2"]." es igual a $resultado</p> <br>";
}
?>

<a href="index.php">Volver</a>
</body>
</html>

```

##### Parte 4: “ecf-factorial.php”

Pedir un número X y calcular su factorial utilizando iteraciones.

```php
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

```

##### Parte 5: “ecf-multiplicacion.php”

Pedir un número X y mostrar su tabla de multiplicar.

```php
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
</

```

##### Parte 6: “ecf-recorte.php”

Pedir una cadena de texto y mostrarla varias veces: en cada línea se mostrará un carácter menos que en la anterior. Sólo se puede usar una función de strings: “strlen()”

```
Mi casa
Mi cas
Mi ca
Mi c
Mi 
Mi
M 
```

```php
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
    <input type="submit" name="enviar">
</form>
<?php } else {

    for($i=strlen($_POST["cadena"]);$i>0;$i--){
        for($x=0;$x<$i;$x++){
            echo $_POST["cadena"][$x];
        }
        echo "<br>";
    }

}
?>

<a href="index.php">Volver</a>
</body>
</html>

```

##### Parte 7: “ecf-meses”

En un formulario se recogerá un valor en un cuadro de texto y un radio group para indicar si el año actual es bisiesto o no. Habrá que comprobar si el valor leído corresponde al número de un mes (de 1 a 12) o a su nombre (“enero”, “febrero”). Si es así se mostrará el número de días que tiene ese mes, y si no es así se mostrará un error. Nota:para comparar String, busca referencia de las funciones *strcmp* y *strcasecmp*. 


```php
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

```
##### Parte 8: “ecf-acumulador”

Ir pidiendo por formulario una serie de números enteros (de uno en uno) e irlos sumando. Se deja de pedir números al usuario cuando la cantidad supera el valor 50. Escribir entonces la suma de todos los números introducidos. Pista: para poder mantener el valor acumulado (antes de estudiar técnicas más avanzadas) utilizar un campo de formulario de tipo oculto (“hidden”).

```php
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


```

##### Parte 9: “ecf-multiplos”

Mostrar en pantalla los múltiplosde 3 y 5 entre el 1 y el 1000. A continuación mostrar en pantalla los 20 primeros múltiplos de 3 y 5.

```php



<html>

<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/**Mostrar en pantalla los múltiplosde 3 y 5 entre el 1 y el 1000.
 *A continuación mostrar en pantalla los 20 primeros múltiplos de 3 y 5.
 */
    $cont=0;

    for($i=1;$i<1000;$i++){
        if($i%3==0){
            echo "<p> $i es multiplo de 3</p>";
        }
        if($i%5==0){
            echo "<p> $i es multiplo de 5</p>";
        }
    }
    $i=1;
    while($cont<20){

        if(($i%3==0) || ($i%5==0)) {
            if ($i % 3 == 0) {
                echo "<p> $i es multiplo de 3</p>";

            }
            if ($i % 5 == 0) {
                echo "<p> $i es multiplo de 5</p>";

            }
            $cont++;
        }
        $i++;

    }

?>

<a href="index.php">Volver</a>

</body>
</html>

```
##### Parte 10: “ecf-cuadrado”

Pedir un número X y generar un cuadrado como el que se muestra en la figura (en este caso X vale 10). Una vez resuelto, mejorarlo para que las filas pares salgan en un color más claro (lightblue por ejemplo) para facilitar la lectura. En la figura se ha usado un “padding” de 3 para los elementos de celda (td).

![U2P03](U2P03.png)

```php
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
        $contador=1;
        echo "<table style='border-color: black;'>";


        for($i=0;$i<$numero;$i++){
            if($i%2==0){
                echo"<tr style='background: lightgray;'>";

            }
            else{
                echo"<tr style='background: lightblue;'>";
            }
            for($x=0;$x<$numero;$x++){

                    echo "<td style='padding: 0.3cm;'>$contador</td>";
                    $contador++;
            }
            echo "</td>";
        }
        echo"</table>";


}
?>

<a href="index.php">Volver</a>

</body>
</html>

```