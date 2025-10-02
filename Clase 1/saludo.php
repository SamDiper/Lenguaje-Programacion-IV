<?php
if($_GET){
    $Nombre = $_GET['txtNombre'];
    echo "Hola, $Nombre";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
    <body>
    <p>Añade a la URL ?txtNombre=< Nombre ></p>
    </body>
</html>