<?php
// ej1

    // $suma=0;
    //     for ($i=50; $i >= 40; $i--) { 
    //         echo "$i <br>";
    //         $suma+=$i;
    //     }
    //     echo "total de la suma $suma";

// ej2

    // for ($i=50; $i <= 500; $i+=25) {
    //     echo "$i <br>";
    // }

// ej3

    // for ($i=0; $i <= 100; $i++) {
    //     if($i%3==0){
    //         echo "$i <br>";
    //     }
    // }

// ej4

    // $suma=0;
    // for ($i=1; $i <= 50; $i++) {
    //     if(!($i%2==0)){
    //         $suma+=$i;
    //         echo "$i <br>";
    //     }
    // }
    // echo "Total de la suma de impares $suma"

// ej5

    // $anterior = 0;
    // $actual = 1;

    // for ($i = 0; $i < 10; $i++) {
    //     echo "$anterior,";
    //     $siguiente = $anterior + $actual;
    //     $anterior = $actual;
    //     $actual = $siguiente;
    // }

// ej while

    // $a=0;
    // $suma=0;
    // while ($a < 100) {
    //     $a++;
    //     $suma+=$a;
    // }

    // echo "$suma<br>";

// ej do while
    $a=0;

    do {
        $a++;
        if ($a%2==0) {
            echo "$a<br>";
        }
    } while ($a < 50);

?>
