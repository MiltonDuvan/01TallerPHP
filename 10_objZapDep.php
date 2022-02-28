<?php
require_once("10_Zapatos.php");
require_once("10_Deportivos.php");


echo "<h2> Zapatos </h2>";
$objZapatos=new Zapatos (38,"Adidas",5);
print_r("<pre>");
print_r($objZapatos->getInventario());
print_r("</pre>");



echo "<h3> EMPLEADO ACTIVO </h3>";
$objDeportivos=new Deportivos (38,"Nike",5,"Excelentes zapatos para deporte",650000,5);
print_r("<pre>");
print_r($objDeportivos->setInventario());
print_r("</pre>");

echo "<h4> Limite de Zapatos</h4>";
echo $objDeportivos->CantidadStrock(5)

?>