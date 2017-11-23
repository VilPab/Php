<?php
include("conect.php");
include("Animal.php");
?>
<html>
<head>
    <link href="estilos/style.css" rel="stylesheet">
</head>
<body>
<table>
    <?php
//    $resultado = $conexion->query("SELECT * FROM animal ORDER BY nombre");
      $resultado = $conexion->query("SELECT chip, nombre, especie AS tipo, imagen FROM animal ORDER BY nombre");

    if ($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
    /* while ($animal = $resultado->fetch_object('Animal')) {
   echo $animal . "<br/>";}*/

    while ($animal = $resultado->fetch_object('Animal')) {
        // echo $animal."<br/>"; // primer intento más sencillo
        echo "<tr bgcolor='lightgreen'>";
        echo "<td>" . $animal->getChip() . "</td>\n";
        echo "<td>" . $animal->getNombre() . "</td>\n";
        echo "<td>" . $animal->getTipo() . "</td>\n";
        echo "<td><img class='imagen' src='img/" . $animal->getImagen() . "'></td>\n";
        echo "</tr>";
        print_r($animal);
    }
    ?>
</table>
<?php
include("enlaces.php");
?>
</body>
</html>