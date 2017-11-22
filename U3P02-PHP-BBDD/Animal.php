<?php
/**
 * Created by PhpStorm.
 * User: lesok
 * Date: 22/11/17
 * Time: 22:00
 */

class Animal
{
    private $chip;
    private $nombre;
    private $especie;
    private $imagen;


    public function __toString()
    {
        $cadena = "<p>Nombre:" . $this->getNombre() . "</p><p>Especie:" . $this->getEspecie() . "</p><br><img src='img/" . $this->getImagen() . "'>";
        return $cadena;
    }

    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getChip()
    {
        return $this->chip;
    }


    public function setChip($chip)
    {
        $this->chip = $chip;
    }


    public function getEspecie()
    {
        return $this->especie;
    }

    public function setEspecie($especie)
    {
        $this->especie = $especie;
    }


    public function getImagen()
    {
        return $this->imagen;
    }


    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }


}