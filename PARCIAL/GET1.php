<?php
    //Datos retornados por URL GET
    if($_GET){
        //Asignacion de variables desde el GET
        $nombre=$_GET["nombre"];
        $edad=$_GET["edad"];

        //Impresion de variables enviadas
        echo "Hola $nombre, tienes $edad años";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <!-- Instrucciones para enviar los datos -->
    <p>Añade a la URL <b>?nombre=< nombre >&edad=< edad ><b></p>
</body>  
</html>