<?php

require_once("07_Libro.php");

class Revista extends Libro{

    public $edition;
    public $numberpages;


    function __construct($vr_namebook,$vr_author,$vr_edition,$vr_numberpages)
    {
        parent:: __construct($vr_namebook, $vr_author);
        parent::$code;
        $this->edition=$vr_edition;
        $this->numberpages=$vr_numberpages;
        
    }

    function getEdition(){
        return $this->edition;
    }
    function getNumberpages(){
        return $this->numberpages;
    }
}//end
?>

