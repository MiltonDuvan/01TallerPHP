<?php
require_once("09_Torneo.php");
require_once("09_Partidos.php");


echo "<h3> TORNEO </h3>";
$objTorneo=new TorneoFutbol("Chicago Bulls",15,"Ascenso");
echo"Nombre del equipo: ". $objTorneo->nameteam ."<br>";
echo "Jugadores Disp: ".$objTorneo->numberparticipants."<br>";
echo "Estado Asignado: ".$objTorneo->getStateAssign()."<br>";

echo "<h3> EQUIPO DOS </h3>";
$objPartidos=new Partidos("Miami Heat",15,"Ascenso",18);
echo"Nombre del equipo: ". $objPartidos->nameteam ."<br>";
echo "Jugadores Disp: ".$objPartidos->numberparticipants."<br>";
echo "Estado Asignado: ".$objPartidos->getStateAssign()."<br>";

echo "<h4> Cambiando Estado Asignado </h4>";
echo $objPartidos->NumbMatchWon(7);




?>


