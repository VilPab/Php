<?php
include("conect.php");
include("Animal.php");
?>
<html>
<body>
<table>
    <?php
    $resultado = $conexion->query("SELECT * FROM animal ORDER BY nombre");
    if ($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
    /* while ($animal = $resultado->fetch_object('Animal')) {
   echo $animal . "<br/>";}*/

    while ($animal = $resultado->fetch_object('Animal')) {
        // echo $animal."<br/>"; // primer intento más sencillo
        echo "<tr bgcolor='lightgreen'>";
        echo "<td>".$animal->getChip()."</td>\n";
        echo "<td>".$animal->getNombre()."</td>\n";
        echo "<td>".$animal->getEspecie()."</td>\n";
        echo "<td><img src='img/".$animal->getImagen()."'></td>\n";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>