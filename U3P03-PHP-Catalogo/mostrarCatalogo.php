<?php
include "Obra.php";
include "Pintura.php";
include "connection.php";
session_start();
$busqueda=(isset($_GET['busqueda']) ? $_GET['busqueda']:'');
$autor=(isset($_SESSION["autor"]) ?  $_SESSION["autor"]:'');
$autor1=(isset($_SESSION["autor1"]) ?  $_SESSION["autor1"]:'');

if(isset($_REQUEST['sesion']) && $_REQUEST['sesion']==0){
    $autor='';
    $busqueda=null;
    session_destroy();
}

?>

<html>
<head>
    <link href="./estilos/style.css" rel="stylesheet">
</head>
<body>
<table>
    <form action="./mostrarCatalogo.php" method="GET">
        Buscar obra:<input type="text" name="busqueda">
        <input type="submit" name="Buscar">
    </form>
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

    if($busqueda!=''){
        $resultado = $conexion->query('SELECT * FROM musica,autor WHERE musica.idAutor=autor.idAutor AND musica.titulo="'. $busqueda.'"' );

    }else {

        if (isset($_REQUEST["autor"]) && $autor=='') {
            $_SESSION['autor']=$_REQUEST['autor'];
            $autor = $_REQUEST["autor"];
            $resultado = $conexion->query('SELECT * FROM musica,autor WHERE musica.idAutor=autor.idAutor AND autor.nombre="' . $autor . '" ORDER BY musica.idObra ' . $order);

        } else {
            if ($autor !=''){
                $resultado = $conexion->query('SELECT * FROM musica,autor WHERE musica.idAutor=autor.idAutor AND autor.nombre="' . $autor . '" ORDER BY musica.idObra ' . $order);


            } else {
                $resultado = $conexion->query('SELECT * FROM musica,autor WHERE musica.idAutor=autor.idAutor ORDER BY musica.idObra ' . $order);


            }
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
        if(!empty($obra->getDuracion())) echo "<td>" . $obra->getDuracion() . "</td>\n";else echo "<td> Sin datos </td>\n";
        echo "<td><a href='mostrarObra.php?idObra=".$obra->getIdObra()."'><img class='imagen' src='img/" . $obra->getImagen() . "'></a></td>\n";
        echo "</tr>";

    }
    echo "<a href='mostrarCatalogo.php?sesion=0'>Quitar filtros</a>\n";

    ?></table>
<table>
    <tr style='background-color:lightblue'>
        <th>Id Pintura <a href="mostrarCatalogo.php?order=1&<?php if($autor1!='') echo 'autor1='.$autor1; ?>"> &#9650</a>
            <a href="mostrarCatalogo.php?order=0&<?php if($autor1!='')echo 'autor1='.$autor1 ;?>"> &#9660</a></th>
        <th>Titulo</th>
        <th>Año</th>
        <th>Id Autor</th>
        <th>Imagen</th>
    </tr>

    <?php
    $resultado->free_result();

    if(isset($busqueda)){
        $resultado = $conexion->query('SELECT * FROM pintura,autor WHERE pintura.idAutor=autor.idAutor AND pintura.titulo="'. $busqueda.'"' );

    }else {
        if (isset($_REQUEST["autor1"]) && !isset($_SESSION['autor1'])) {
            $autor = $_REQUEST["autor1"];
            $_SESSION['autor1'] = $_REQUEST["autor1"];
            $resultado = $conexion->query('SELECT * FROM pintura,autor WHERE pintura.idAutor=autor.idAutor AND autor.nombre="' . $autor1 . '" ORDER BY pintura.idPintura ' . $order);

        } else {
            if (isset($_SESSION['autor1']) && $autor != '') {
                $resultado = $conexion->query('SELECT * FROM pintura,autor WHERE pintura.idAutor=autor.idAutor AND autor.nombre="' . $autor1 . '" ORDER BY pintura.idPintura ' . $order);

            } else {
                $resultado = $conexion->query('SELECT * FROM pintura,autor WHERE pintura.idAutor=autor.idAutor ORDER BY pintura.idPintura ' . $order);
            }
        }
    }

   /* if($resultado->num_rows===0)echo "No hay pinturas en el registro";
    while ($pintura = $resultado->fetch_object('Pintura')) {
        echo "<tr bgcolor='lightgreen'>";
        echo "<td>" . $pintura->getIdPintura() . "</td>\n";
        echo "<td>" . $pintura->getTitulo() . "</td>\n";
        echo "<td>" . $pintura->getAno() . "</td>\n";
        echo "<td><a href='mostrarCatalogo.php?order=".$numero."&autor1=".$pintura->getNombre()."'>" . $pintura->getNombre() . "</td>\n";
        echo "<td><a href='mostrarObra.php?idPintura=".$pintura->getIdPintura()."'><img class='imagen' src='img/" . $pintura->getImagen() . "'></a></td>\n";
        echo "</tr>";
    }*/
    ?>

    <?php  while ($pintura = $resultado->fetch_object('Pintura')) : ?>
        <tr bgcolor='lightgreen'>
             <td><?= $pintura->getIdPintura(); ?></td>
             <td><?= $pintura->getTitulo(); ?></td>
             <td><?= $pintura->getAno(); ?></td>
             <td><a href="mostrarCatalogo.php?order=<?= $numero; ?>&autor1=<?= $pintura->getNombre(); ?>"><?= $pintura->getNombre(); ?></a></td>
             <td><a href="mostrarObra.php?idPintura=<?= $pintura->getIdPintura(); ?>"><img class="imagen" src="img/<?= $pintura->getImagen() ?>"></a></td>
        </tr>
     <?php endwhile; ?>

</table>
</body>
</html>