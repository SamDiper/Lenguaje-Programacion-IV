
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <!-- Titulo -->
    <h1>CALCULADORA</h1>

    <!-- Formulario tipo get -->
    <form method="get" action="">
        <input type="number" step="any" name="n1" placeholder="Número 1" required><br>
        <input type="number" step="any" name="n2" placeholder="Número 2" required><br>

        <!-- select para dar las opciones y que retornen un valor dentro de la variable operacion y hacer las condicionales -->
        <select name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br>

        <input type="submit" value="Calcular">
    </form>

</body>
</html>
<!-- El php abajo para que el resultado lo muestre debajo del form -->
<?php

//validar que exista un submit de get
if ($_GET) {
    //asignacion de variables
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $operacion = $_GET["operacion"];

    //condicionales dependiendo del select option
    if ($operacion == "suma") {
            //echo con el resultado de la operacion
            echo "La suma total es: ". $n1 + $n2;
        } else {
            if ($operacion == "resta") {
                echo "La resta total es: ". $n1 - $n2;
            } else {
                if ($operacion == "multiplicacion") {
                    echo "La multiplicación total es: ". $n1 * $n2;
                } else {
                    if ($operacion == "division") {
                        if ($n2 == 0) {
                            echo "No se puede dividir entre 0";
                        } else {
                            echo "La división total es: ". $n1 / $n2;
                        }
                    }
                }
            }
    }
    
}
?>