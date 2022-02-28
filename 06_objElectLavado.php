<?php

require_once("06_Electrodomestico.php");
require_once("06_Lavadora.php");
$objElectrodomestico =new Electrodomestico("Samsung");
echo "<h3>Electrodomestico</h3>";
 echo"Marca: ". $objElectrodomestico->marca ."<br>";
 $objElectrodomestico->mostrarConstantIva();

 $objElectrodomestico =new Lavadora("lg",4,1700000);
 echo "<h3>Lavadora LG</h3>";
 
 echo "Marca:" .$objElectrodomestico->marca."<br>";
 echo "cantidad disponibles: " . $objElectrodomestico->getCantidad()."<br>";
 echo "Precio Lavadora: " .$objElectrodomestico->getPrecio()."<br>";

 
 echo "la compra de esa$ lavadoras es: ".number_format($objElectrodomestico->Venta(2))." con Iva incluidio"."<br>";

 $objElectrodomestico =new Lavadora("Wirpool",5,1500000);
 echo "<h3>Lavadora Wirpool</h3>";
 
 echo "Marca:" .$objElectrodomestico->marca."<br>";
 echo "cantidad disponibles: " . $objElectrodomestico->getCantidad()."<br>";
 echo "Precio Lavadora: " .$objElectrodomestico->getPrecio()."<br>";

 
 echo "la compra de esa$ lavadoras es: ".number_format($objElectrodomestico->VentaDos(4))." con Iva incluidio"."<br>";
?>