<?php
/**
 * Created by PhpStorm.
 * User: alumno
 * Date: 30/10/17
 * Time: 10:46
 */

class cuadrado
{


    private $lado;


    function __construct($a)
    {
        echo "<p>Generando cuadrado</p>";
        $this->lado = $a;

    }

    public function calcularArea()
    {
        return pow($this->lado, 2);
    }

    public function getLado()
    {
        return $this->lado;
    }

    public function setLado($a)
    {
        $this->lado = $a;
    }
}
?>