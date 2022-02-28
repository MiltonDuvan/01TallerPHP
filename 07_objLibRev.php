<?php

require_once("07_Libro.php");
require_once("07_Revista.php");

echo "<h2>LIBRO</h2>";
$objLibro=new Libro("Juventud en Extasis","Unknown");
echo  $objLibro->ShowCode(01)."<br>";
echo "Nombre: ".$objLibro->getNameBook()."<br>";
echo "Autor: ".$objLibro->getAuthor()."<br>";

echo "<h2>REVISTA</h2>";
$objRevista=new Revista("NewYorkTimes","Unknown Prev","Text",68);
echo $objRevista->ShowCode(02)."<br>";
echo "Nombre: ".$objRevista->getNameBook()."<br>";
echo "Autor: ".$objRevista->getAuthor()."<br>";
echo "Edicion: ".$objRevista->getEdition()."<br>";
echo "Numero Paginas: ".$objRevista->getNumberpages()."<br>";


?>