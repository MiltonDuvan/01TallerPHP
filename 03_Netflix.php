<?php
class Netflix{

private $titulo;
static $annocreacion=1990;
public $alquila;
public $mes_despues;
public $fechadevolucion;

function __construct($vr_titulo, $vr_alquila)
{
    $this->titulo=$vr_titulo;
    $this->alquila=$vr_alquila;
    
}
function Añodecreacion(){
    //self se usa en metodos estaticos, hace referencia a la clase actual
    return self::$annocreacion;
}

function getTitulo(){
    return $this->titulo;
}
function setTitulo($vr_titulo){
$this->titulo=$vr_titulo;
}
function getFechaDevolucion(){
    $fecha_actual = date("d-m-Y");
return date("d-m-Y",strtotime($fecha_actual."+ 5 days")); 
}
function CostoAlquiler($diasalquiler){
if ($diasalquiler<=5){
    $diasalquiler=$diasalquiler*4000;
    return $diasalquiler;
} else{
    return "no puedes alquilar mas dias ";
}

}





}//end
?>