###### *Desarrollo Web en Entorno Servidor - Curso 2017/2018 - IES Leonardo Da Vinci - Alberto Ruiz*
## U2P05 - Validación de formularios
#### Entrega de: *Pablo Villar García, Jose Maria Fernadez Parra*
----
#### 1. Descripción:

El objetivo de la práctica es investigar en grupo las posibilidades de validación de formularios desde el servidor. Ten en cuenta que existen muchos otros métodos para validar directamente en cliente, ahorrando el envío y respuesta de información al servidor.

#### 2. Formato de entrega:

Rellena el apartado Memoria situado al final de este enunciado.

#### 3. Trabajo a realizar:

Codifica una aplicación web que recoja los datos de alta de un alumno, incluyendo nombre, apellidos, password, email, fecha de nacimiento, dirección, teléfono y ciclo formativo. El formulario se muestra y se procesa en el mismo archivo. Puedes incluir más datos si lo deseas. 

Si el usuario introduce correctamente los datos, se mostrarán en pantalla. Si no los introduce correctamente, se volverá a mostrar el formulario pero:

* Si en un campo ha habido un problema, se mostrará un mensaje de error explicándolo, a ser posible junto al propio campo
* Se recordarán los datos que sí introdujimos correctamente

Indicaciones:

* Utiliza tipos de campos HTML 5 para el email, el teléfono, la contraseña y la fecha de nacimiento. ¿Pueden ayudar a hacer validación en cliente?
* Tú decides los criterios de seguridad que debe cumplir la contraseña para considerarse válida. Sugerencia: mínimo ocho caracteres, y que utilice minúsculas, mayúsculas y algún símbolo de puntuación



* Para recordar los valores, tendrás que recoger lo que escribió el usuario en un campo, e incluirlo como valor inicial de ese mismo campo al mostrar el formulario


* Para ver si un campo está relleno, podemos usar la función booleana *empty()*.
* Aunque la función *isset()* no sirve para campos de texto, sí es útil para botones de radio o de selección

##### Etapa 1: Formación de grupos
Esta práctica la realizaréis en grupos de dos.

##### Etapa 2: Ideas previas
Sin utilizar Internet, discutid posibles ideas para la validación y mejora de los formularios, sin llegar a implementarlas. Tomad nota de las ideas. Intentad plantear la lógica del programa (la estructura del procesamiento)

##### Etapa 3: Investigación
Utilizad Internet para investigar formas aceptadas de validación en PHP. Hablamos de técnicas sencillas, y en ningún caso de técnicas o lenguajes de cliente. A la hora de buscar fuentes, tened en cuenta:
1. La credibilidad de la fuente
2. La fecha de escritura de la información
3. La versión de PHP utilizada


##### Etapa 4: Codificación
Aplicad vuestras ideas para diseñar una aplicación en PHP que recoja datos, algunos de ellos obligatorios, y se comporte de la forma más amigable y útil posible para el usuario.

##### Etapa 5: Resultado
Código del archivo php generado:

```php+HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $telefono=false;
    $direccion=false;
    $enviado=false;
    $clave=false;
    $errorP=true;
    $errorF=true;
if(isset($_POST["enviar"])) {
    $email=$_POST["email"];

    $fecha=$_POST["fecha"];
    $dia=(int)substr($fecha,0,2);
    $mes=(int)substr($fecha,3,2);
    $año=(int)substr($fecha,6, 4);

    switch($mes){
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            if($dia>0 && $dia<=31){
                $errorF=true;
            }else{
                $fecha="";
                $errorF=false;
            }
            break;

        case 4:
        case 6:
        case 8:
        case 11:
        if($dia>0 && $dia<=30){
                $errorF=true;
        }else{
            $fecha="";
            $errorF=false;
        }
        break;

        case 2:

            if ($dia <= 28 && $dia >= 1) {
                $errorF=true;
            } else if (($dia == 29 && (($año % 4 == 0 && $año % 100 != 0) || $año % 400 == 0))) {

                $errorF=true;

            } else {
                $errorF=false;
                $fecha="";

            }
            break;
    }


    if(!empty($_POST["pass"])) {

        if (strlen($_POST["pass"]) >= 8 && strlen($_POST["pass"]) <= 12) {
            $clave = true;
            $errorP = true;
            $pass = $_POST["pass"];
        } else {
            $clave = false;
            $pass = $_POST["pass"];
            $errorP = false;
        }
    }

    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    if(!empty($_POST["tlf"])) {
        $telefono=true;
        $tlf=$_POST["tlf"];
    }else{
        $tlf="";
    }
    if(!empty($_POST["dir"])) {
        $direccion=true;
        $dir=$_POST["dir"];
    }
    else{
        $dir="";
    }

    $ciclo=$_POST["ciclo"];
    $enviado=true;


}else {
    $email = "";
    $fecha = "";
    $pass = "";
    $nombre = "";
    $apellidos = "";
    $tlf = "";
    $dir = "";
    $ciclo = "";
}
if(!$enviado || !$clave ){
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
    Email:<input type="email" name="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required value="<?php echo $email ;?>" /><br>
    Fecha de nacimiento:<input type="date" name="fecha" value="<?php echo $fecha ;?>" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" required / ><?php if(!$errorF){echo" La fecha tiene que tener un formato dd/mm/aaaa y tiene que ser valida"; $errorF=true;}?><br>
    Contraseña:<input type="password" name="pass" pattern="[A-Za-z0-9!?-]{1,12}" value="<?php echo $pass ;?>" /><?php if(!$errorP){echo" La contraseña tiene que tener de 8 a 12 caracteres"; $errorP=true;}?><br>
    Nombre:<input type="text" name="nombre" pattern="[a-zA-Z àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" value="<?php echo $nombre ;?>" required /><br>
    Apellidos:<input type="text" name="apellidos" pattern="[a-zA-Z àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"value="<?php echo $apellidos ;?>" required /><br>
    Teléfono:<input type="tel" name="tlf" pattern="[0-9]{9}" value="<?php echo $tlf ;?>" /><br>
    Dirección:<input type="text" name="dir" pattern="[a-zA-Z0-9- \àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" value="<?php echo $dir ;?>" /><br>
    Ciclo Formativo:<select name="ciclo" >
                         <option value="DAW">DAW</option>
                         <option value="ASIR">ASIR</option>
                         <option value="DAM">DAM</option>
                    </select>
    <br> <input name="enviar" type="submit" >
</form>
<?php }
    else{

    ?>


<div><h1>Datos personales</h1></div>
        <h2><?php echo "$nombre $apellidos";?></h2>
    <ul>

        <li>Email <?php echo $email?></li>
        <li>Fecha de nacimiento <?php echo $fecha?></li>
        <li>Ciclo <?php echo $ciclo?></li>

        <?php
            if($telefono ){
            echo "<li>Telefono $tlf </li>";
        }
        if($direccion){

       echo" <li>Direccion $dir</li>";
            }
        ?>

    </ul>

<?php

}

?>

</body>
</html>

```

Captura o capturas de pantalla mostrando su funcionamiento:
