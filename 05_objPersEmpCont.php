<?php
require_once("05_Persona.php");
require_once("05_Empleado.php");
require_once("05_Contador.php");

$objPersona=new Persona("Diego",18);

echo "<h2>PERSONA</h2>";

print_r("<pre>");
print_r($objPersona->Responsabilidades());
print_r("</pre>");

$objPersona=new Empleado("Manrique",19,1000000);
echo "<h2>EMPLEADO</h2>";
echo "Nombre: ".$objPersona->nombre. "<br>";
echo "Sueldo: ".$objPersona->getSueldo();

echo "<h2>CONTADOR</h2>";
$objPersona=new Contador("Milton",18,96000,10);

echo "Nombre: ".$objPersona->getNombre()."<br>";
echo "Edad: ".$objPersona->getEdad()."<br>";
echo "Sueldo por dia: ".number_format ($objPersona->getSueldo())."<br>";
echo "Dias trabajados: ".$objPersona->getDiaslaborados()."<br>";
echo "Sueldo total de los dias trabajados: ".number_format($objPersona->SueldoDiastrabajados(15))."<br>";




?>