<?php

require_once("09_Torneo.php");
class Partidos extends TorneoFutbol{

    public $numbmatchwon;

    function __construct($vr_nameteam,$vr_numberparticipants,$vr_stateassign,$vr_numbmatchwon)
    {
        parent::__construct($vr_nameteam,$vr_numberparticipants,$vr_stateassign);
        $this->numbmatchwon=$vr_numbmatchwon;
    }

    function NumbMatchWon($vr_numbmatchwon){
        $this->numbmatchwon=$vr_numbmatchwon;
        if ($vr_numbmatchwon<15){

            parent::setStateAssign("Desenso");
            echo "ESTADO ACTUAL: ";
            return parent::getStateAssign();
          
        }

    }

}


?>