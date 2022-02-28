<?php
class TorneoFutbol{

    public $nameteam;
    public $numberparticipants;
    private $stateassign="Ascenso";

    function __construct($vr_nameteam,$vr_numberparticipants,$vr_stateassign)
    {
        $this->nameteam=$vr_nameteam;
        $this->numberparticipants=$vr_numberparticipants;
        $this->stateassign=$vr_stateassign;
    }
    
    function getStateAssign(){
       return $this->stateassign;
    }
    function setStateAssign($vr_stateassign){
       $this->stateassign=$vr_stateassign;
     }
    

}//end

?> 