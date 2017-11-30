<?php
include "Obra.php";
include "Pintura.php";
include "connection.php";
session_start();
if (isset($_SESSION['autor'])){
    $autor=$_SESSION["autor"];}
else $autor='';
if(isset($_REQUEST['sesion']) && $_REQUEST['sesion']==0){
    $autor='';
    session_destroy();
}
?>

<html>
<head>
    <link href="./estilos/style.css" rel="stylesheet">
</head>
<body>
<table>
    <tr style='background-color:lightblue'>
        <th>Id Obra <a href="mostrarCatalogo.php?order=1&<?php if($autor!='') echo 'autor='.$autor; ?>"> &#9650</a>
            <a href="mostrarCatalogo.php?order=0&<?php if($autor!='')echo 'autor='.$autor ;?>"> &#9660</a></th>
        <th>Titulo </th>
        <th>Año</th>
        <th>Id Autor</th>
        <th>Duración</th>
        <th>Imagen</th>
    </tr>
    <?php
    $order='';
    $numero='';
    if(isset($_REQUEST["order"]) && $_REQUEST["order"]==1){
        $order='ASC';
        $numero=1;
    }else{
        $order='DESC';
        $numero=0;
    }
    if(isset($_REQUEST["autor"]) && !isset($_SESSION['autor'])) {
        $autor = $_REQUEST["autor"];
        $_SESSION['autor'] = $_REQUEST["autor"];
        $resultado = $conexion->query('SELECT * FROM musica,autor WHERE musica.idAutor=autor.idAutor AND autor.nombre="'.$autor.'" ORDER BY musica.idObra '. $order);

    }else{
        if(isset($_SESSION['autor']) && $autor!=''){
            $resultado = $conexion->query('SELECT * FROM musica,autor WHERE musica.idAutor=autor.idAutor AND autor.nombre="'.$autor.'" ORDER BY musica.idObra '. $order);

        }else {
            $resultado = $conexion->query('SELECT * FROM musica,autor WHERE musica.idAutor=autor.idAutor ORDER BY musica.idObra ' . $order);
        }
    }

    // para limpiar querys seguridad ::
    // $variable_limpia=  mysqli_real_escape_string($variable);



    if ($resultado->num_rows === 0) echo "<p>No hay obras</p>";

    while ($obra = $resultado->fetch_object('Obra')) {
        echo "<tr bgcolor='lightgreen'>";
        echo "<td>" . $obra->getIdObra() . "</td>\n";
        echo "<td>" . $obra->getTitulo() . "</td>\n";
        echo "<td>" . $obra->getAno() . "</td>\n";
        echo "<td><a href='mostrarCatalogo.php?order=".$numero."&autor=".$obra->getNombre()."'>" . $obra->getNombre() . "</td>\n";
        $_SESSION['autor']=$obra->getNombre();
        if(!empty($obra->getDuracion())) echo "<td>" . $obra->getDuracion() . "</td>\n";else echo "<td> Sin datos </td>\n";
        echo "<td><a href='mostrarObra.php?idObra=".$obra->getIdObra()."'><img class='imagen' src='img/" . $obra->getImagen() . "'></a></td>\n";
        echo "</tr>";

    }
    echo "<a href='mostrarCatalogo.php?sesion=0'>Quitar filtros</a>\n";

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