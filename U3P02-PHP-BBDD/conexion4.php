<html>
<head>
    <link href="estilos/style.css" rel="stylesheet">
</head>
<body>
<table style='border:0'>
    <tr style='background-color:lightblue'>
        <th>Chip</th>
        <th>Nombre</th>
        <th>Especie</th>
        <th>Imagen</th>
    </tr>
    <?php
    $servidor = "localhost";
    $usuario = "alumno_rw";
    $clave = "dwes";

    $conexion = new mysqli($servidor,$usuario,$clave,"animales");
    $conexion->query("SET NAMES 'UTF8'");
    $conexion ->query("UPDATE animal SET especie='jabali' WHERE nombre='Babe'");

    $conexion ->query ("DROP TABLE animal");
    echo "<h3 style='color:red'>". $conexion->error ."</h3>";

    echo "<h3 style='color:red'>". $conexion->error ."</h3>";
    $resultado = $conexion -> query("SELECT * FROM animal ORDER BY chip");
    if($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
    while($fila=$resultado->fetch_assoc()) {
        echo "<tr style='background-color:lightgreen'>";
        echo "<td>$fila[chip]</td>";
        echo "<td>$fila[nombre]</td>";
        echo "<td>$fila[especie]</td>\n";
        echo "<td><img class='imagen' src='img/$fila[imagen]'</td>\n";
        echo "</tr>";

    }
    ?>
</table>
<?php
include("enlaces.php");
?>
</body>
</html>