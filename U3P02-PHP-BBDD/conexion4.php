<html>
<body>
<table style='border:0'>
    <tr style='background-color:lightblue'>
        <th>Chip</th>
        <th>Nombre</th>
        <th>Especie</th>
        <th>Imagen</th>
    </tr>
    <?php
    include("conect.php");
    $conexion ->query("UPDATE animal SET especie='jabali' WHERE nombre='Babe'");
    echo "<h3 style='color:red'>". $conexion->error ."</h3>";
    $resultado = $conexion -> query("SELECT * FROM animal ORDER BY chip");
    if($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
    while($fila=$resultado->fetch_assoc()) {
        echo "<tr style='background-color:lightgreen'>";
        echo "<td>$fila[chip]</td>";
        echo "<td>$fila[nombre]</td>";
        echo "<td>$fila[especie]</td>\n";
        echo "<td><img src='img/$fila[imagen]'</td>\n";
        echo "</tr>";

    }
    ?>
</table>
</body>
</html>