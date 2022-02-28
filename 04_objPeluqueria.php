<?php
require_once("04_Peluqueria.php");
$objPeluqueria=new Barbershop("Blashop","Calle 5 No-122",3117559878,"9 A.M","10 P.M",15000,"Corte cabello");
echo "Id Peluqueria: 00".$objPeluqueria->IdBarber(0)."<br>";
echo "Nombre de la peluqueria: ".$objPeluqueria->name."<br>";
echo "Dirrecion de la peluqueria: ".$objPeluqueria->address."<br>";
echo "Numero de la peluqueria: ".$objPeluqueria->phone."<br>";
echo "Abierto a las: ".$objPeluqueria->starttime."<br>";
echo "Cerrado a las: ".$objPeluqueria->closingtime."<br>";
echo "Valor de corte : ".$objPeluqueria->getCutValue()."<br>";
echo "Servicio: ".$objPeluqueria->getServicio()."<br>";


$objPeluqueria->AgendarCita();

print_r("<pre>");
echo "<h1>AGENDAR CITA</h1>";
print_r($objPeluqueria->AgendarCita());
print_r("</pre>");
echo "Cambio de servicio: ".$objPeluqueria->setServicio(3)."<br>";
echo "Cambio de servicio: ".$objPeluqueria->setCutValue(3)."<br>";


?>