<?php
include "Obra.php";
include "Pintura.php";
include "connection.php";

?>
<html>
<header>
</header>
<body>
<?php
$tipo;
// Recoger el identificador de la obra de request
    if (isset($_REQUEST["idPintura"])){
        $id = $_REQUEST["idPintura"];
        $tipo=1;
        $resultado = $conexion->query("SELECT * FROM pintura,autor WHERE pintura.idAutor=autor.idAutor AND pintura.idPintura=$id");}
    else {
        if (isset($_REQUEST["idObra"])) {
            $id = $_REQUEST["idObra"];
            $tipo = 0;
            $resultado = $conexion->query("SELECT * FROM musica,autor WHERE musica.idAutor=autor.idAutor AND musica.idObra=$id");
        }else{
            die ("<h3>ERROR en la petición. Falta identificador de cuidador</h3>");
        }
    }


// Obtener los datos de la obra

if($resultado->num_rows === 0) die ("<h3>ERROR en la petición. Identificador de cuidador no válido</h3>");
if($tipo) {
    $pintura = $resultado->fetch_object('Pintura');
    echo "<img class='imagen' src='img/" . $pintura->getImagen() . "'>";
    echo "<h3>Titulo: " . $pintura->getTitulo() . "</h3>";
    echo "<ol><li>Año " . $pintura->getAno() . "</li>\n";
    echo "<br><li>Autor " . $pintura->getNombre() . "</li>\n";
    echo "<br><li>Imagen<img src='img/" . $pintura->getImagenA() . "'></li></ol>\n";


}
if(!$tipo) {
    $musica = $resultado->fetch_object('Obra');
    echo "<img class='imagen' src='img/" . $musica->getImagen() . "'>";
    echo "<h3>Titulo: " . $musica->getTitulo() . "</h3>";
    echo "<ol><li>" . $musica->getAno() . "</li>\n";
    echo "<br><li>Duración " . $musica->getDuracion() . "</li>\n";
    echo "<br><li>Autor " . $musica->getNombre() . "</li>\n";
    echo "<br><li>Imagen<img src='img/" . $musica->getImagenA() . "'></li></ol>\n";


}
?>
<a href="mostrarCatalogo.php">Volver</a>
</body>
</html>