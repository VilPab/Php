<?php
// PDO
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";

$pdo = new PDO("mysql:host=localhost;dbname=animales", $usuario, $clave);

include("Animal.php");
?>
<html>
<head>
    <link href="estilos/style.css" rel="stylesheet">
</head>
<body>
<table>
    <?php

      $query="SELECT chip, nombre, especie AS tipo, imagen FROM animal ORDER BY nombre";
      $resultado = $pdo->query($query);
      $resultado->setFetchMode(PDO::FETCH_CLASS, 'Animal');

        if($resultado->rowCount()===0)echo "No hay animales en la base de datos";


            while ($animal = $resultado->fetch()) {
                // echo $animal."<br/>"; // primer intento más sencillo
                echo "<tr bgcolor='lightgreen'>";
                echo "<td>" . $animal->getChip() . "</td>\n";
                echo "<td>" . $animal->getNombre() . "</td>\n";
                echo "<td>" . $animal->getTipo() . "</td>\n";
                echo "<td><img class='imagen' src='img/" . $animal->getImagen() . "'></td>\n";
                echo "</tr>";

            }

    ?>
</table>
<?php
include("enlaces.php");
?>
</body>
</html>