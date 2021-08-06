<?php
// Escribe una función llamada asteriscos que reciba un string str y retorne el número de asteriscos que hay en str.
function asteriscos(String $str){
$cont = 0;
    for ($i=0; $i < strlen($str) ; $i++) { 
        if ($str[$i]== '*') {
            $cont++;
        }
    } 
    return $cont;     
}
echo asteriscos("h*o*l*a");
?>