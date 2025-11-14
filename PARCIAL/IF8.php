<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <!-- Titulo -->
    <h1>EVALUAR GENERO Y EDAD</h1>
    <!-- Formulario post -->
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="number" name="edad" placeholder="Edad" required><br>

        <!-- options para enviar el género -->
        <select name="genero" >
            <option value="mujer">Mujer</option>
            <option value="hombre">Hombre</option>
        </select>

        <input type="submit" value="Evaluar">
    </form>
</body>
</html>
<?php
//validar si existe submit post
if ($_POST) {
    //asignacion de variables post
    $nombre = $_POST["nombre"];
    $edad   = $_POST["edad"];
    $genero = $_POST["genero"];

    //si es mayor de edad y género masculino es un adulto masculino
    if ($edad > 18 && $genero == "hombre") {
        echo "Eres un Adulto masculino.";
    } 
    //si es mayor de edad y género femenino es una adulta femenina
    elseif ($edad > 18 && $genero == "mujer") {
        echo "Eres una Adulta femenina.";
    } 
    //sino es menor de edad
    else {
        echo "Eres Menor de edad.";
    }
}
?>