<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    <!-- Titulo -->
    <h1>CLASIFICACION DE TRIANGULOS</h1>
    <!-- Formulario post -->
    <form method="post">
        <?php
            //bucle para generar dinámicamente tres inputs number uno por lado
            for ($i = 1; $i <= 3; $i++){
                //imprimir cada input con su respectivo número de lado y con el $i se le pone un nombre dinamico step para permitir floats
                echo "<input type='number' name='Lado$i' placeholder='Lado $i' step='any' required><br>";
            }
        ?>
        <input type="submit" value="Clasificar">
    </form>
</body>
</html>

<?php
//validar el submit del post
if ($_POST) {
    //asignacion de variables post
    $Lado1 = $_POST["Lado1"];
    $Lado2 = $_POST["Lado2"];
    $Lado3 = $_POST["Lado3"];

    //si los tres lados son iguales el triángulo es equilátero
    if ($Lado1 == $Lado2 && $Lado2 == $Lado3) {
        echo "Triángulo Equilátero";
    } 
    //si solo dos lados son iguales el triángulo es isósceles
    elseif ($Lado1 == $Lado2 || $Lado1 == $Lado3 || $Lado2 == $Lado3) {
        echo "Triángulo Isósceles";
    } 
    //si todos los lados son diferentes el triángulo es escaleno
    else {
        echo "Triángulo Escaleno";
    }
}
?>