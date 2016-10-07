
 <?php
/*
 *Crear una clase Rectangulo con dos atributos base y altura. Debe incluir los métodos:
 *- constructor
 *-perimetro
 *-superficie
 *-añade tambien los getters y setters
 *En el fichero ejercicio07 debes crear un ejemplar de la clase anterio y usar los metodos disponibles. 
 *La variedad de pruebas.*/

class Rectangulo
{
    private $_altura;
    private $_base;

    function __construct($altura, $base)   //así los públicos
    {
        $this->_altura = $altura;
        $this->_base = $base;

    }
    public function perimetro()
    {
        return (2*($this->_altura)+2*($this->_base));
    }
    public function superficie()
    {
        return $this->_altura * $this->_base;
    }

    public function getAltura()
    {
        return $altura;
    }
    public function getBase()
    {
        return $base;
    }
    public function setAltura()
    {
        $this->_altura=$altura;
    }
    public function setBase()
    {
        $this->_base=$base;
    }
}


