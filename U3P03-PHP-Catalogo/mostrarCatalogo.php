<?php
include "Obra.php";
include "Pintura.php";
include "connection.php";
?>
<html>
<head>
    <link href="./estilos/style.css" rel="stylesheet">
</head>
<body>
<table>
    <tr style='background-color:lightblue'>
        <th>Id Obra <a href="mostrarCatalogo.php?order=1"> &#9650</a>
            <a href="mostrarCatalogo.php?order=0"> &#9660</a></th>
        <th>Titulo </th>
        <th>Año</th>
        <th>Id Autor</th>
        <th>Duración</th>
        <th>Imagen</th>
    </tr>
    <?php
    $order='';
    $numero='';
    if(isset($_GET["order"]) && $_GET["order"]==1){
        $order='ASC';
        $numero=1;
    }else{
        $order='DESC';
        $numero=0;
    }
    $autor='';
    if(isset($_GET["autor"])){
        $autor=$_GET["autor"];
        $resultado = $conexion->query('SELECT * FROM musica,autor WHERE musica.idAutor=autor.idAutor AND autor.nombre='.$autor.' ORDER BY musica.idObra '. $order);
        $consulta ='SELECT * FROM musica,autor WHERE musica.idAutor=autor.idAutor AND autor.nombre='.$autor.' ORDER BY musica.idObra '. $order;
        echo $consulta;
    }else{
        $resultado = $conexion->query('SELECT * FROM musica,autor WHERE musica.idAutor=autor.idAutor ORDER BY musica.idObra '. $order);

    }

    // para limpiar querys seguridad ::
    // $variable_limpia=  mysqli_real_escape_string($variable);



    if ($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";

    while ($obra = $resultado->fetch_object('Obra')) {
        echo "<tr bgcolor='lightgreen'>";
        echo "<td>" . $obra->getIdObra() . "</td>\n";
        echo "<td>" . $obra->getTitulo() . "</td>\n";
        echo "<td>" . $obra->getAno() . "</td>\n";
        echo "<td><a href='mostrarCatalogo.php?order=".$numero."&autor=".$obra->getNombre()."'>" . $obra->getNombre() . "</td>\n";
        if(!empty($obra->getDuracion())) echo "<td>" . $obra->getDuracion() . "</td>\n";else echo "<td> Sin datos </td>\n";
        echo "<td><a href='mostrarObra.php?idObra=".$obra->getIdObra()."'><img class='imagen' src='img/" . $obra->getImagen() . "'></a></td>\n";

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
        echo "<td><a href='mostrarObra.php?idPintura=".$pintura->getIdPintura()."'><img class='imagen' src='img/" . $pintura->getImagen() . "'></a></td>\n";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>