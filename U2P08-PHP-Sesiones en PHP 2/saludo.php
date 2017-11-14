<?php
/*Crea un archivo `saludo.php` y codifica un único archivo PHP con el siguiente comportamiento:
   * Si no hay sesión iniciada, se mostrará un formulario para pedir nuestro nombre.
Al enviar el formulario se iniciará una sesión almacenando el nombre como variable de sesión
* Si hay sesión iniciada, se mostrará un texto como este: *Damos la bienvenida a Alberto**/

if(session_status() == PHP_SESSION_NONE){
    $_SESSION["idioma"]="ES";

}
?>