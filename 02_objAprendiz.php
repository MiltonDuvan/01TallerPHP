<?php

require_once("02_AprendizTaller.php");

$objAprendiz=new Aprendiz(1067852153,"Campo Solarte","Milton","Lenguajes",5,1,5,1);
print_r('<pre>');
print_r($objAprendiz);
print_r('</pre>');


echo $objAprendiz->Definitiva()."<br>";
echo $objAprendiz->ConceptoValorativo();
echo"<br>Valoracion Cualitativa: </br>".$objAprendiz->ValorCualitativa();

?>