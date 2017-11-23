<?php
include "Obra.php";
include "connection.php";
?>
<html>
<head>

</head>
<body>
<table>
    <tr style='background-color:lightblue'>
        <th>Id Obra</th>
        <th>Titulo</th>
        <th>Año</th>
        <th>Id Autor</th>
        <th>Duración</th>
        <th>Imagen</th>
    </tr>
    <?php
    $resultado = $conexion->query("SELECT * FROM musica ORDER BY ano");

    if ($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";

    while ($obra = $resultado->fetch_object('Obra')) {
        echo "<tr bgcolor='lightgreen'>";
        echo "<td>" . $obra->getIdObra() . "</td>\n";
        echo "<td>" . $obra->getTitulo() . "</td>\n";
        echo "<td>" . $obra->getAno() . "</td>\n";
        echo "<td>" . $obra->getIdAutor() . "</td>\n";
        if(!empty($obra->getDuracion())) echo "<td>" . $obra->getDuracion() . "</td>\n";else echo "<td> Sin datos </td>\n";
        echo "<td><img class='imagen' src='img/" . $obra->getImagen() . "'></td>\n";
        echo "</tr>";

    }
    ?>
</table>
</body>
</html>