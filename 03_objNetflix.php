<?php
echo "Fecha actual: ". date('l \t\h\e jS');
require_once("03_Netflix.php");
$objNetflix = new Netflix("Blanca Nieves","SI");
echo "<br>"."Pelicula: ". $objNetflix->getTitulo() ."<br>";
echo "Año de creacion: ".$objNetflix->Añodecreacion() ."<br>";
echo "Disponible: ".$objNetflix->alquila ."<br>";
echo "Fecha devolucion: ".$objNetflix->getFechaDevolucion() ."<br>";
echo "costo de dias por alquiler: ".$objNetflix->CostoAlquiler(3);
?>