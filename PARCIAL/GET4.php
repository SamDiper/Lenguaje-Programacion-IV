<?php
    if($_GET){
        $clave=$_GET["clave"];
        if($clave!="123"){
            echo "Acceso denegado";
        }
        else{
            echo "Acceso autorizado";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <!-- Instrucciones para enviar los datos -->
    <p>Añade a la URL <b>?valor=< clave ><b></p>
</body>  
</html>