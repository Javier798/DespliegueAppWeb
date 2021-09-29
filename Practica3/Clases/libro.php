<?php
namespace Clases;
require("Hobby.php");
use Clases\Hobby;

class Libro extends Hobby{ 
    private $titulo;
    private $numPaginas;
    private $vendible;
    private $fechaPublicacion;
    private $data = array();

    
    function __construct($titulo, $numPaginas, $vendible,$fechaPublicacion)
    {
        $this->data=[""];
        $this->numPaginas = $numPaginas;
        $this->titulo = $titulo;
        $this->fechaPublicacion = $fechaPublicacion;
        $this->vendible = $vendible;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getNumPaginas(){
        return $this->numPaginas;
    }
    public function setNumPaginas($numPaginas){
        $this->numPaginas = $numPaginas;
    }
    public function getVendible(){
        return $this->vendible;
    }
    public function setVendible($vendible){
        $this->vendible = $vendible;
    }
    public function getFechaPublicacion(){
        return $this->fechaPublicacion;
    }
    public function setfechaPublicacion($fechaPublicacion){
        $this->fechaPublicacion = $fechaPublicacion;
    }

    public function __set($name, $value)
    {
        
        $this->data[$name] = $value;
    }
    public function __get($name)
    {
     
        if (array_key_exists($name, $this->data)) {
            echo $this->data[$name];
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Propiedad indefinida mediante __get(): ' . $name .
            ' en ' . $trace[0]['file'] .
            ' en la línea ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }
    
    public function iniciar(){
        echo "El libro ". $this->titulo ." se esta iniciando<br>";
    }
    public function detener(){
        echo "El libro ". $this->titulo ." se esta deteniendo<br>";
    }
    public function actualizar(array $a){
        echo "El libro ". $this->titulo ." se esta actualizando<br>";
    }

    public function __toString()
    {
       
        return "Titulo: " . $this->titulo . ", Numero de paginas: " . $this->numPaginas . ", Vendible: " . $this->vendible . ", Fecha publicacion: " . $this-> fechaPublicacion;
    }
}
?>