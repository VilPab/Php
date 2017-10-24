<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Primer ejemplo de PHP</title>
</head>
<body>
<?php
define("Alumno", 24);
$prueba="hola";
$prueba2="mundo";
$a="Esto es una prueba ";
echo "<p>$prueba $prueba2<p>\n";
echo "<p>$prueba $a".$prueba."</p> \n ".Alumno;

$a=3;
$b=12;
$suma=$a+$b;
$resta=$a-$b;
$multiplacion=$a*$b;
$division=$a/$b;
$concatenacion=$a.$b;
$asignacion=$a=$b;
echo "<p>Esto es una asignacion $asignacion \n</p>";
echo "<p>Esto es una suma $suma  \n</p>";
echo "<p>Esto es una resta $resta \n</p>";
echo "<p>Esto es una multiplicacion $multiplacion \n</p>";
echo "<p>Esto es una division $division \n</p>";
echo "<p>Esto es una concatenacion $concatenacion </p>";

if($a> $b){
    echo "<p>".$a." es mayor que ".$b."\n </p>";
}elseif($a==$b){
    echo "<p>".$a." es igual que ".$b."\n </p>";
}else{
    echo "<p>".$a." es menor que ".$b."\n </p>";
}
$a=3;
if($a> $b):
    echo "<p>".$a." es mayor que ".$b."\n </p>";
elseif($a==$b):
    echo "<p>".$a." es igual que ".$b."\n </p>";
else:
    echo "<p>".$a." es menor que ".$b."\n </p>";
endif;


for($i=0;$i<5;$i++):
    echo $i;
    echo "<p>\n</p>";
endfor;
while($suma<100){
    echo $suma." ";
    $suma+=$a;
}

echo"<h2>Condicionales</h2>";

$x=7;
if(isset($x)){
    echo"<p>La variable $x contiene un valor</p>";
}
$x=NULL;
if(!isset($x)){
    echo"<p>La variable $x no contiene un valor</p>";
}

echo"<h2>Cadenas</h2>";

$cadena="Esto es una cadena";
$des=str_shuffle($cadena);
$sub=substr($cadena, 4);
$tok=strtok($cadena);
echo "<p> $cadena </p>";
echo "<p> $cadena[0]</p>";
echo "<p> $des</p>";
echo "<p> $sub</p>";
echo "<p> tok $tok</p>";
echo "<p>".$cadena[strlen($cadena)-1]." </p>";

echo"<h2>Arrays</h2>";

$array=array("x","des","h");
$array=array(0=>"a",1=>4,5=>"c");
$array[3] = "hola";
$array[7] = "hola";
$contador=0;

echo "<p>El tamaño es ".sizeof($array)."</p>";

echo"<h2>Recorrer con for</h2>";

for($i=0;$contador!=sizeof($array);$i++):
if( isset($array[$i])){
echo $array[$i];
echo "<p>\n</p>";
$contador++;}
endfor;
echo "<p>".print_r($array)."</p>";
echo "<p>".var_dump($array)."</p>";

echo"<h2>For Each</h2>";
echo "<ul>";
foreach($array as $elemento){
    echo "<li>".$elemento."</li>";
}
echo "</ul>";

$capitales = array ("España"=>"Madrid","Portugal"=>"Lisboa","Francia"=>"Paris");
ksort($capitales);
echo "<p>".print_r($capitales)."</p>";

echo "<ul>";
krsort($capitales);
foreach($capitales as $clave=> $elemento){
    echo "<li>".$clave." capital ".$elemento."</li>";
}
echo "</ul>";

?>
</body>
</html>