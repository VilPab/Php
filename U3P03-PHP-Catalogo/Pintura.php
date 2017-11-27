<?php
/**
 * Created by PhpStorm.
 * User: alumno
 * Date: 27/11/17
 * Time: 10:45
 */

class Pintura
{
    private $idPintura;
    private $titulo;
    private $ano;
    private $imagen;
    private $idAutor;
    private $nombre;


    public function getNombre()
    {
        return $this->nombre;
    }

    public function getIdPintura()
    {
        return $this->idPintura;
    }


    public function getTitulo()
    {
        return $this->titulo;
    }


    public function getAno()
    {
        return $this->ano;
    }


    public function getImagen()
    {
        return $this->imagen;
    }


    public function getIdAutor()
    {
        return $this->idAutor;
    }


    public function __toString()
    {
        return"";
    }
}