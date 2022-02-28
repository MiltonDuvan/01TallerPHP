<?php

use JetBrains\PhpStorm\ArrayShape;

class Aprendiz{
public $documentoident;
public $apellidos;
public $nombres;
public $asignatura;
public $primerpar;
public $segundopar;
public $examenfinal;
private $total;

function __construct(int $vr_documentoident, string $vr_apellidos,string $vr_nombres, string $vr_asignatura,float $vr_primerpar, float $vr_segundopar, float $vr_examenfinal,$vr_total)
{
    $this->documentoident=$vr_documentoident;
    $this->apellidos=$vr_apellidos;
    $this->nombres=$vr_nombres;
    $this->asignatura=$vr_asignatura;
    $this->primerpar=$vr_primerpar;
    $this->segundopar=$vr_segundopar;
    $this->examenfinal=$vr_examenfinal;
    $this->total=$vr_total;
}

function getDatosAprendiz(){

    $arrayDatos =Array (
  'apellidos: ' =>$this->apellidos,
  'nombres: ' =>$this->nombres,
  'documento id: '=>$this->documentoident,
  
    
    );
   
}

function getNotasAprendiz(){
   
    $arrayNotas=Array (
        'asignatura: '=>$this->asignatura,
        'primer parcial: '=>$this->primerpar,
        'segundo parcial: '=>$this->segundopar,
        'examen final:' =>$this->examenfinal,
    );
}


public function Definitiva(){
$vr_total=$this->total;
$vr_primerpar=$this->primerpar;
$vr_segundopar=$this->segundopar;
$vr_examenfinal=$this->examenfinal;
$vr_total=($vr_primerpar*0.30)+($vr_segundopar*0.30)+($vr_examenfinal*0.40);
return $vr_total;
return $this->Definitiva;
}

function ConceptoValorativo(){

    
    $vr_total=$this->total;
       if ($vr_total<3){
        echo "PROMEDIO Aceptable";
    } else if ($vr_total>=3|| $this->$vr_total<=3.9){
        echo " PROMEDIO ACEPTABLE ";
    } else if ($vr_total>=4){
          echo"<br>"."PROMEDIO EXCELENTE";
    } 

      
}
public function  ValorCualitativa() {
    $vr_total=$this->total;
    if ($vr_total<3) {
        $this->$vr_total = "Aprobo <br>";
    }else if ($vr_total>=3) {
                $this->$vr_total = "Ro";
            }
            return $this->$vr_total;
        }
    
        

} //end

?>