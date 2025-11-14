<?php
    //contador y acumulador
    $a=0;
    $suma=0;
    //suma los numeros del 1 al 100 y rompe el ciclo cuando el contador llegue a 100
    do {
        $suma+=$a;
        $a++;
    } while ($a <= 100);

    echo "Suma total = $suma";

?>