<?php
// Suma hasta N

// Escribe una función llamada `sumarHastaN` que reciba un número y retorne la suma de 
// todos los números positivos hasta ese número (incluyéndolo).

//     sumarHastaN(10) -> 55
//     sumarHastaN(100) -> 5050
// Sumas los numero pares dentro de N

function sumaHastaN($numero){
    $suma=0;
    for ($i=1; $i <=$numero ; $i++) { 
       if ($i%2==0) {
           $suma = $suma+$i;
       }
    }
    return $suma;
}

echo sumaHastaN(100);