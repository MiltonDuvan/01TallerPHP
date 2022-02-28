<?php
class Libro {

    static $code=01;
    public $namebook;
    public $author;


    function  __construct($vr_namebook,$vr_author)
    {
        $this->namebook=$vr_namebook;
        $this->author=$vr_author;
       
    }
    function ShowCode(){
        echo  "Codigo: ".self::$code ;
        
        
    }

    function getNameBook(){
        return $this->namebook;
    }
    function getAuthor(){
        return $this->author;
    }


}
?>

