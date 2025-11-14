<!-- no fui capaz de hacerlo con html/php/do while, con condicionales si se podria -->

<!-- Solucion en consola -->
<?php

// variable de la opcion del menu
$opc = 0;

// ciclo que se repetirá hasta que se elija la opción 3
do {
    echo "\n1. Sumar\n";
    echo "2. Restar\n";
    echo "3. Salir\n";

    // leer la opción desde teclado intval para valores int y readline espera a que ingrese la variable por consola
    $opc = intval(readline("Ingrese una opción: "));

    //evaluar la opcion para saber si es suma o resta
    if ($opc == 1) {
        //leer los dos números floatval para floats
        $n1 = floatval(readline("Ingrese el primer número: "));
        $n2 = floatval(readline("Ingrese el segundo número: "));
        //mostrar resultado de la operacion
        echo "Resultado de la suma: " . ($n1 + $n2) . "\n";

    } elseif ($opc == 2) {
        $n1 = floatval(readline("Ingrese el primer número: "));
        $n2 = floatval(readline("Ingrese el segundo número: "));
        echo "Resultado de la resta: " . ($n1 - $n2) . "\n";

    } elseif ($opc == 3) {
        //mensaje de salida
        echo "Saliendo del programa...\n";

    } else {
        //manejo de opción inválida
        echo "Opción no válida. Intente de nuevo.\n";
    }
} while ($opc != 3);
?>