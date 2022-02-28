<?php

class Barbershop{

static $idbarbershop= 01;
public $name;
public $address;
public $phone;
public $starttime;
public $closingtime;
public $cutvalue;
private $service;

function __construct($vr_name, $vr_adrress, $vr_phone, $vr_starttime, $vr_closingtime,$vr_cutvalue,$vr_service)
{
    $this->name=$vr_name;
    $this->address=$vr_adrress;
    $this->phone=$vr_phone;
    $this->starttime=$vr_starttime;
    $this->closingtime=$vr_closingtime;
    $this->cutvalue=$vr_cutvalue;
    $this->service=$vr_service;
}
function getCutValue(){
    return $this->cutvalue;
}
function setCutValue($vr_cutvalue){
$this->cutvalue=$vr_cutvalue;
if ($vr_cutvalue==1){
    return 15000;
 } elseif ($vr_cutvalue==2){
      return 17000;
 }elseif($vr_cutvalue==3){
    return 19000;
 }
}
function getServicio(){
    return $this->service;
}
function setServicio($vr_service){
$this->service=$vr_service;
if ($vr_service==1){
   return "Corte cabello";
} elseif ($vr_service==2){
     return "Corte cabello + cejas ";
}elseif($vr_service==3){
   return "Corte cabello + Cejas + Barba ";
}
}
function IdBarber(){
return self::$idbarbershop;
}
function AgendarCita(){
    $arrayAgendar = Array(
        'Servicio: '=>$this->service,
        'Valor de corte: '=>$this->cutvalue,

    );
    return $arrayAgendar;
 

}
}//end



?>