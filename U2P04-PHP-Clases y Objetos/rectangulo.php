<?php
/**
 * Created by PhpStorm.
 * User: alumno
 * Date: 30/10/17
 * Time: 10:46
 */


class figura
{
    private $color;

    public function __construct($a){
        echo "Generando figura ";
        $this->color=$a;

}
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function calcularArea()
    {

    }

    public function calcularPerimetro()
    {

    }
}


class rectangulo extends figura
{


    private $altura;
    private $base;
    public $area;
    public $perimetro;

    function __construct($a,$b,$c)
    {

        parent::__construct($c);
        echo "<p> Rectangulo</p>";
        $this->base = $a;
        $this->altura=$b;


    }
    function __destruct()
    {
        echo "<p>Destruyendo el rectangulo</p>";
    }
    function __toString()
    {
        return "La base es $this->base y la altura es $this->altura";
    }

    public function calcularArea()
    {
        $this->area=$this->base*$this->altura;
        return ($this->area);
    }
    public function calcularPerimetro()
    {
        $this->perimetro=($this->base*2)+($this->altura*2);
        return ($this->perimetro);
    }

    public function getBase()
    {
        return $this->base;
    }
    public function getAltura()
    {
        return $this->altura;
    }

    public function setBase($a)
    {
        $this->base = $a;
    }
    public function setAltura($a)
    {
        $this->altura = $a;
    }
}
?>