<?php
require_once("08_Persona.php");
require_once("08_Empleado.php");


echo "<h2> PERSONA </h2>";
$objPersona=new Persona("MDC","20");
print_r("<pre>");
print_r($objPersona->DatosArray());
print_r("</pre>");
echo"Nombre: ". $objPersona->nombre ."<br>";
echo "Edad: ".$objPersona->getEdad()."<br>";


echo "<h3> EMPLEADO ACTIVO </h3>";
$objEmpleado=new Empleado("ÑD",25,800000,"Activo");
echo "Nombre:".$objEmpleado->nombre."<br>";
echo "Edad: ".$objEmpleado->getEdad()."<br>";
echo"Sueldo: ".$objEmpleado->sueldo."<br>";
echo "Estado: ".$objEmpleado->getEstado()."<br>";

echo "<h4> Cambiando Estado </h4>";
echo $objEmpleado->setEstado("Inactivo");
echo "ESTADO ACTUAL:".$objEmpleado->getEstado();

?>