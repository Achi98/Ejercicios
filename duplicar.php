<?php
// Escribe una función llamada duplicar que reciba un arreglo de números como parámetro y retorne un nuevo arreglo con cada elemento duplicado (multiplicado por dos).

function duplicar($numeros){
    for ($i=0; $i < count($numeros) ; $i++) { 
        $numeros[$i]=$numeros[$i]*2;
    }
    return $numeros;
}

$nuevoArreglo= duplicar($numeros=[8, 5]);
echo implode($nuevoArreglo) ;
?>