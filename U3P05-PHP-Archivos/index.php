<!DOCTYPE html>
<html><head><meta charset='UTF-8'/></head>
<body>
<?php
$rutaArchivo = "files/modulos.txt";
// Pruebas
//readfile("files/modulos.txt");

//$lineasArchivo = file($rutaArchivo);
//print_r($lineasArchivo);

/*$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
echo fread($archivo,filesize($rutaArchivo));
fclose($archivo);*/


/*$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
while(!feof($archivo)) {
    $c = fgetc($archivo);
    if (($c == "\n") or ($c == "\r\n")) echo "<br/>";
    else echo $c;
}
fclose($archivo);*/



function mostrar ($rutaArchivo){

    $archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
    while(!feof($archivo)) {
        echo fgets($archivo) . "<br/>";
    }
    fclose($archivo);

}
$archivo = fopen($rutaArchivo, "a") or die("Imposible  abrir el archivo para escritura");
fwrite($archivo,"Programación\n");
fwrite($archivo,"Entornos de desarrollo\n");
fclose($archivo);

mostrar($rutaArchivo);
?>
</body></html>