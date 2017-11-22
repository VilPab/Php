
<?php
include("conect.php");
?>
<html>
<header>
</header>
<body>
<?php
if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
$conexion->query("SET NAMES 'UTF8'");
echo "<p>A continuación mostramos algunos registros:</p>";
//$resultado = $conexion -> query("SELECT * FROM animal,cuida,cuidador WHERE chip=chipAnimal AND cuida.idCuidador=cuidador.idCuidador ");
$resultado = $conexion -> query("SELECT * FROM animal ORDER BY nombre");
if($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
$fila=$resultado->fetch_assoc();
while($fila!=null) {
    echo "<hr>";
    echo "Nombre:" . $fila['nombre'];
  //  echo "<br>Cuidador:" . $fila['Nombre'];
    echo "<br>Especie: $fila[especie]"; // observa la diferencia en el uso de comillas
    $fila=$resultado->fetch_assoc();
}
$resultado->free_result();
$resultado = $conexion -> query("SELECT * FROM cuidador ORDER BY Nombre");
if($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
$fila=$resultado->fetch_assoc();
while($fila!=null) {
    echo "<hr>";
    echo "<br>Cuidador:" . $fila['Nombre'];
    echo "<br>id: $fila[idCuidador]"; // observa la diferencia en el uso de comillas
    $fila=$resultado->fetch_assoc();
}
echo "<h3>Desconectando...</h3>";

mysqli_close($conexion);
?>
</body>
</html>