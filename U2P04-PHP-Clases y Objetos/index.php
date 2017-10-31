<html>
<head>

</head>
<body>

<?php
include("rectangulo.php");
if (!isset($_POST['enviar'])) {

    if (isset($_POST['numero1']) && !is_numeric($_POST['numero1']))  {
        echo 'No es un numero';
        die;
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
        Base:<input type="number" name="numero1"><br>
        Altura:<input type="number" name="numero2"><br>
        Color:<input type="text" name="color"><br>
        <input type="submit" name="enviar">
    </form>
<?php } else {

    $rectangulo1 = new rectangulo($_POST["numero1"],$_POST["numero2"],$_POST["color"]);


    echo "La base es ".$rectangulo1->getBase()."<br>";
    echo "La altura es ".$rectangulo1->getAltura()."<br>";
    echo "El perimetro del rectangulo es ".$rectangulo1->calcularPerimetro()."<br>";
    echo "El area del rectangulo es ".$rectangulo1->calcularArea()."<br>";
    echo "El color del rectangulo es ".$rectangulo1->getColor()."<br>";

    /** Muestra todos los atributos publicos **/

    /** Muestra todos los atributos sean o no publicos **/
    /**var_dump($rectangulo1);**/
    echo "$rectangulo1<br>";
    foreach($rectangulo1 as $item=>$value){
        echo "$item => $value\n ";
    }
    echo "\n";
    $rectangulo2=$rectangulo1;

    $rectangulo2->setColor("Verde");

    echo $rectangulo2->getColor()."<br>";
    echo $rectangulo1->getColor()."<br>";



}
?>
</body>
</html>
