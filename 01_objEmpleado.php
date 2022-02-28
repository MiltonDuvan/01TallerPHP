<?php

require_once("01_ejercicio.php");




$objEmpleado=new Empleado("Miller", 3138541225, "Desarrollador",30050000,3000);
$objEmpleado->getDatosEmpleado();
print_r('<pre>');
print_r($objEmpleado);
print_r('</pre>');

echo"Nombre del empleado ".$objEmpleado->getNombre() ." ";
echo " Numero de celular ".$objEmpleado->getCelular();
$objEmpleado-> pagarRetencion(0). "<br>";



?>