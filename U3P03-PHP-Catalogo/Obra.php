<?php
/**
 * Created by PhpStorm.
 * User: alumno
 * Date: 23/11/17
 * Time: 13:55
 */

class Obra
{
    private $idObra;
    private $titulo;
    private $ano;
    private $duracion;
    private $imagen;
    private $idAutor;
    private $nombre;
    private $imagenA;



    public function getImagenA()
    {
        return $this->imagenA;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getIdObra()
    {
        return $this->idObra;
    }


    public function getTitulo()
    {
        return $this->titulo;
    }


    public function getAno()
    {
        return $this->ano;
    }


    public function getDuracion()
    {
        return $this->duracion;
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