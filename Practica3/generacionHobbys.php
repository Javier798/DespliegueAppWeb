<?php
use Clases\Ayuda;
use Clases\Libro;

spl_autoload_register(function ($nombre) {
    require($nombre . '.php');
});

$libros=[];
const n=10;
$ayuda = new Ayuda();
for($i=0;$i<n;$i++){
    $libros[$i] = new Libro($ayuda->generarTitulo(),$ayuda->generarPaginas(),$ayuda->generarVendible(),$ayuda->generarFecha());
 }
 for ($i=0; $i < count($libros); $i++) { 
     echo $libros[$i]."<br>";
 }

 $atributos = [
    "editorial",
    "ejemplaresVendidos",
    "libreria",
    "resumen"
];
echo "<br><br>AÑADIR ATRIBUTOS<br><br>";
for ($i=0; $i < count($libros); $i++) {
    
        $libros[$i]->editorial=$ayuda->generarTitulo();
        /*$libros[$i]->$atributos[1]=$ayuda->generarPaginas();
        $libros[$i]->$atributos[2]=$ayuda->generarTitulo();
        $libros[$i]->$atributos[3]=$ayuda->generarVendible();*/
    
}
for ($i=0; $i < count($libros); $i++) { 
    echo $libros[$i];
    echo ", Editorial: ".$libros[$i]->editorial."<br>";
    /*echo $libros[$i]->ejemplaresVendidos;
    echo $libros[$i]->libreria;
    echo $libros[$i]->resumen;*/
}

?>