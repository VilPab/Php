<?php
include "Obra.php";
include "Pintura.php";
include "connection.php";

if(isset($_POST["enviar"])){

    $resultado = $conexion->query("SELECT * FROM musica,autor WHERE musica.idAutor=autor.idAutor AND musica.idObra = $_POST[numero]");


}else{

?>
    Introduzca el Id de la obra:<input type="number" name="numero"><br>
    ¿Que tipo de obra es?:
        Pintura<input type="radio" name="obra" value="pintura">
        Musica<input type="radio" name="obra" value="musica">
        <input type="submit" name="enviar">
    </form>


   <?php
}
?>