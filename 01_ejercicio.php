<?php

class Empleado {




private $nombre;
private $celular;
public $cargo;
protected $sueldo;
public $auxtransporte;


function __construct($vr_nombre, int $vr_celular, $vr_cargo,float $vr_sueldo,float $vr_auxtransporte){
    $this->nombre=$vr_nombre;
    $this->celular=$vr_celular;
    $this->cargo=$vr_cargo;
    $this->sueldo=$vr_sueldo;
    $this->auxtransporte=$vr_auxtransporte;
}

function getNombre(){
    return $this->nombre;
}
function setNombre($vr_nombre){
    $this->nombre=$vr_nombre;
}

function getCelular(){
    return $this->celular;
}

function setCelular($vr_celular){
    $this->celular=$vr_celular;
}
function getDatosEmpleado(){
    $arrayDatos=Array (
        'Cargo: '=> $this -> cargo,
        'Sueldo: '=> $this ->sueldo,
    );
    return $arrayDatos;
}

function pagarRetencion(float $retencion){
if ($this->sueldo>=3700000){
$vr_sueldo=$this->sueldo;

$retencion=$vr_sueldo*0.9;

$this->sueldo=$vr_sueldo;

echo "<br> ". "El valor a pagar por la retencion es del 9%, usted debe pagar:  ". $retencion;}
else { 
    echo "<br>"."No debes pagar retencion";
}
 
} 

}//end
?>