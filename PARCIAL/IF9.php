<?php
    //validar que exista envío post en variable edad
    if (isset($_POST["edad"])) {
        //asignacion de variables post
        $usuario=$_POST["usuario"];
        $edad=$_POST["edad"];

        //si el usuario es Estudiante y tiene menos de 25 años su tarifa es de 10k
        if ($usuario == "Estudiante" && $edad < 25) {
            echo "Tarifa $10.000";
        } 
        //si la edad está entre 25 y 60 sin importar tipo de usuario su tarifa es 15k
        elseif ($edad >= 25 && $edad <= 60) {
            echo "Tarifa $15.000";
        } 
        //si la edad es mayor a 60 su tarifa es de 8k
        elseif ($edad > 60) {
            echo "Tarifa $8.000";
        } 
        //si no se cumple ninguna condición 
        else {
            echo "Seleccione correctamente el tipo de usuario y edad";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <!-- Formulario post -->
    <form action="" method="post">
        <!-- select para enviar el tipo de usuario -->
        <select name="usuario">
            <option value="">Seleccione una opcion</option>
            <option value="Estudiante">Estudiante</option>
            <option value="Comun">Común</option>
        </select><br>
        <input type="number" name="edad" >
        <input type="submit" value="CALCULAR TARIFA">
    </form>
</body>
</html>