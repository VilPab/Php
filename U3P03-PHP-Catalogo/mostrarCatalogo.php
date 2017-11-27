<?php
include "Obra.php";
include "Pintura.php";
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
    $resultado = $conexion->query("SELECT * FROM musica,autor WHERE musica.idAutor=autor.idAutor");

    if ($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";

    while ($obra = $resultado->fetch_object('Obra')) {
        echo "<tr bgcolor='lightgreen'>";
        echo "<td>" . $obra->getIdObra() . "</td>\n";
        echo "<td>" . $obra->getTitulo() . "</td>\n";
        echo "<td>" . $obra->getAno() . "</td>\n";
        echo "<td>" . $obra->getNombre() . "</td>\n";
        if(!empty($obra->getDuracion())) echo "<td>" . $obra->getDuracion() . "</td>\n";else echo "<td> Sin datos </td>\n";
        echo "<td><img class='imagen' src='img/" . $obra->getImagen() . "'></td>\n";
        echo "</tr>";

    }
    ?></table>
    <table>
    <tr style='background-color:lightblue'>
        <th>Id Pintura</th>
        <th>Titulo</th>
        <th>Año</th>
        <th>Id Autor</th>
        <th>Imagen</th>
    </tr>

        <?php
        $resultado->free_result();
        $resultado = $conexion->query("SELECT * from pintura,autor WHERE autor.idAutor=pintura.idAutor");
        if($resultado->num_rows===0)echo "No hay pinturas en el registro";
    while ($pintura = $resultado->fetch_object('Pintura')) {
        echo "<tr bgcolor='lightgreen'>";
        echo "<td>" . $pintura->getIdPintura() . "</td>\n";
        echo "<td>" . $pintura->getTitulo() . "</td>\n";
        echo "<td>" . $pintura->getAno() . "</td>\n";
        echo "<td>" . $pintura->getNombre() . "</td>\n";
        echo "<td><img class='imagen' src='img/" . $pintura->getImagen() . "'></td>\n";


        echo "</tr>";
    }
    ?>
</table>
</body>
</html>