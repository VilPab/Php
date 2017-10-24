<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Primer ejemplo de PHP</title>
</head>
<body>
<?php

/* Esto es un comentario*/

//Esto es otro tipo

#Y este es el tercer tipo

//pryeba
define("Alumno", "pepe",TRUE);
define("color", "azul",FALSE);
$prueba="hola";
$prueba2="mundo";
$a="Esto es una prueba ";
echo '<p>'.$prueba.$prueba2.'<p>\n';
echo "<p>$prueba $a".$prueba."</p> \n ".Alumno;
echo color;
$a=3;
$b=12;
$suma=$a+$b;
$resta=$a-$b;
$multiplacion=$a*$b;
$division=$a/$b;
$concatenacion=$a.$b;
$asignacion=$a=$b;


$a=5;
$numero1=&$a;
$numero2=&$a;

$a+=3;


echo "</br>numero1 ".$numero1." ";
echo "numero2 ".$numero2;



$boolean= TRUE;
$double = doubleval(5.2);
if(is_bool($boolean)){
    echo "<p>Esto es un boolean $boolean \n</p>";
}
if(is_double($double)){
    echo "<p>Esto es un double $double  \n</p>";
}
if(is_numeric($double)){
    echo "<p>Esto es un numero $double \n</p>";
}

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

switch ($a){
    case 1:
        echo "Hola";
        break;
    
    case 3: 
        echo "Adios";
}

for($i=0;$i<5;$i++):
    echo $i;
    echo "<p>\n</p>";
endfor;
do{
    echo $suma." ";
    $suma+=$a;
}while($suma<100);

echo"<h2>Condicionales</h2>";

$x=7;
if(isset($x) && $x==7){
    echo"<p>La variable $x contiene un valor</p>";
}
$x=NULL;
if(!isset($x) || $x<5){
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

sort($array);
echo "<p>".var_dump($array)."</p>";
rsort($array);
echo "<p>".var_dump($array)."</p>";

echo "<p>El tamaño es ".sizeof($array)."</p>";

echo"<h2>Recorrer con for</h2>";
sort($array);
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



$sueldo=1000;
function subirSueldo($subida){
    global $sueldo;
    
    $sueldo= $sueldo+$subida;
}

function bajarSueldo($descuento){
    
    
    return  $GLOBALS["sueldo"]-$descuento;
}
echo  "<p> Sueldo base $sueldo </p>";
subirSueldo(30);
echo "<p> Subida de sueldo ".$sueldo."</p>";
echo "<p> Descuento de sueldo ".bajarSueldo(100)."</p>";





echo "<p>".$_SERVER['HTTP_CONNECTION']."</p>\n";
echo $_SERVER['PHP_SELF'];


echo "<p> Hoy es ".date("d-m-y")." y son las ".date("H:i:s:v")." en ".date("e");

?>
<?php 
if(!isset($_POST['enviar'])){
    ?>

    <?php
    if (isset($_POST['edad']) && !is_numeric($_POST['edad'])){
        echo 'pete numero';
        die;
    }
    ?>
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'],ENT_QUOTES,"UTF-8");?> " method="post">
	Nombre:<input type="text" name="nombre"><br>
	Edad:<input type="number" name="edad"><br>
	<input type="submit" name="enviar">
	</form>
	<?php }
	else{
	    echo "<h2> Hola ".$_POST['nombre']."</h2>";
        echo "<h2> Tienes ".$_POST['edad']." años</h2>";
        
	}
        ?>
</body>
</html>