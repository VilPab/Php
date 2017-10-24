###### *Desarrollo Web en Entorno Servidor - Curso 2017/2018 - IES Leonardo Da Vinci - Alberto Ruiz*
## U2P02 - Fundamentos de PHP
#### Entrega de: *Pablo Villar Garcia*
----
#### 1. Descripción:

El objetivo de la práctica es familiarizarse con el lenguaje PHP y codificar un programa en el que queden ejemplificados sus componentes y estructuras básicas, sirviendo más adelante como referencia básica.

#### 2. Formato de entrega:

Inserta el código en este documento.

#### 3. Trabajo a realizar:

Crea un proyecto *U2P02-PHP* y codifica un programa PHP en el que incluyas ejemplos propios de los elementos que se van indicando. Incluye estos apartados antes de cada prueba en forma de comentario de línea. Recuerda incluir este archivo en la carpeta `doc` dentro del proyecto:

* Comentarios de los tres tipos

  ```php
  /* Esto es un comentario*/

  //Esto es otro tipo

  #Y este es el tercer tipo

  ```

  ​


* Sentencias echo con los dos tipos de comillas

  ```php
  $prueba="hola";
  $prueba2="mundo";
  $a="Esto es una prueba ";
  echo '<p>'.$prueba.$prueba2.'<p>\n';
  echo "<p>$prueba $a".$prueba."</p> \n ".Alumno;

  ```

  ​

* Uso de al menos tres operadores de comparación y dos operadores lógicos

  ```php
  if($a> $b){
      echo "<p>".$a." es mayor que ".$b."\n </p>";
  }elseif($a==$b){
      echo "<p>".$a." es igual que ".$b."\n </p>";
  }elseif($a<$b){
      echo "<p>".$a." es menor que ".$b."\n </p>";
  }

  if(isset($x) && $x==7){
      echo"<p>La variable $x contiene un valor</p>";
  }
  $x=NULL;
  if(!isset($x)){
      echo"<p>La variable $x no contiene un valor</p>";
  }
  $x=7;
  if(isset($x) && $x==7){
      echo"<p>La variable $x contiene un valor</p>";
  }
  if(!isset($x) || $x<5){
      echo"<p>La variable $x no contiene un valor</p>";
  }
  ```

  ​

* Uso de un operador de asignación

  ```php
  $asignacion=$a=$b;
  ```

  ​

* Declaración y uso de una variable por referencia


```php
$a=5;
$numero1=&$a;
$numero2=&$a;

$a+=3;


echo "</br>numero1 ".$numero1." ";
echo "numero2 ".$numero2;



```



* Declaración y uso de dos constantes, una que obligue a respetar las mayúsculas en su uso y otra que no lo haga

  ```php
  define("Alumno", "pepe",TRUE);
  define("color", "azul",FALSE);
  ```



* Declaración y uso de un variable booleana y otra de tipo 
  double
```php
$boolean= TRUE;
$double = doubleval(5.2);
echo "<p>Esto es un boolean $boolean \n</p>";
echo "<p>Esto es un double $double  \n</p>";
```
* Uso de is_numeric, is_bool y is_double con estas variables
```php
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
```
* Declaración de una variable de tipo string. Pruebas con la función *strlen* y con tres de las funciones indicadas en el enlace.
```php
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

```
* Declaración de un array escalar y uno asociativo
```php
$array=array("x","des","h");
$array=array(0=>"a",1=>4,5=>"c");
$array[3] = "hola";
$array[7] = "hola";

$capitales=array("España"=>"Madrid","Portugal"=>"Lisboa","Francia"=>"Paris");
```
* Ordenación y volcado de información con *var_dump* siguiendo dos criterios de ordenación en cada uno de los arrays
```php
$capitales = array ("España"=>"Madrid","Portugal"=>"Lisboa","Francia"=>"Paris");
ksort($capitales);
echo "<p>".print_r($capitales)."</p>";

echo "<ul>";
krsort($capitales);
foreach($capitales as $clave=> $elemento){
    echo "<li>".$clave." capital ".$elemento."</li>";
}
echo "</ul>";


sort($array);
echo "<p>".var_dump($array)."</p>";
rsort($array);
echo "<p>".var_dump($array)."</p>";

```
* Una estructura de control de cada tipo (if-elsif-else, switch, while, do-while, for)
```php
if($a> $b):
    echo "<p>".$a." es mayor que ".$b."\n </p>";
elseif($a==$b):
    echo "<p>".$a." es igual que ".$b."\n </p>";
else:
    echo "<p>".$a." es menor que ".$b."\n </p>";
endif;

while($suma<100){
    echo $suma." ";
    $suma+=$a;
}

do{
    echo $suma." ";
    $suma+=$a;
}while($suma<100);


switch ($a){
    case 1:
        echo "Hola";
        break;
    
    case 3: 
        echo "Adios";
}

```
* Un recorrido por cada uno de los dos arrays utilizando foreach, generando por ejemplo una lista ordenada con sus elementos
```php
echo "<ul>";
foreach($capitales as $clave=> $elemento){
    echo "<li>".$clave." capital ".$elemento."</li>";
}
echo "</ul>";

echo "<ul>";
foreach($array as $elemento){
    echo "<li>".$elemento."</li>";
}
echo "</ul>";
```
* Dos pruebas con la variable superglobal _SERVER
```php
echo "<p>".$_SERVER['HTTP_CONNECTION']."</p>\n";
echo $_SERVER['PHP_SELF'];
```
* Dos pruebas de funciones: una devolverá algun tipo, la otra no
```php
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

```
* Impresion de la fecha y hora con todo el detalle posible
```php
echo "<p> Hoy es ".date("d-m-y")." y son las ".date("h:i:s:v,A");
```
* Una función que utilice una variable global
```php
function bajarSueldo($descuento){
    
    
    return  $GLOBALS["sueldo"]-$descuento;
}
```
* Un formulario que reciba tu nombre y lo muestre por pantalla
```php
if(!isset($_POST['enviar'])){
    ?>
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'],ENT_QUOTES,"UTF-8");?> " method="post">
	Nombre:<input type="text" name="nombre"><br>
	<input type="submit" name="enviar">
	</form>
	<?php }
	else{
	    echo "<h2> Hola ".$_POST['nombre']."</h2>";
	}
        ?>
```


