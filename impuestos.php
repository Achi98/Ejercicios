<?php
function calcularImpuestos($edad,$ingresos){
    if ($edad >= 18 && $ingresos >= 1000) {
        return $ingresos*0.4;
    }else{
        return 0;
    }
}

echo calcularImpuestos(15,1000);
echo calcularImpuestos(18, 1000); // retorna 400
echo calcularImpuestos(40, 10000); // retorna 4000
?>