<?php
    //validar que la variable n1 y n2 se envien en el post
    if(isset($_POST["n1"]) && isset($_POST["n2"])){
        //asignacion de variables post
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        //concatenacion para hacer la suma en una linea
        echo "La suma de $n1 y $n2 es ".($n1+$n2);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <!-- Titulo -->
    <h1>SUMA</h1>
    <!-- Formulario post -->
    <form action="" method="post">
        <label for="n1">Ingrese un Número</label>
        <!-- Require para mostrar que es un campo obligatorio y no enviarlo vacio -->
        <input type="number" name="n1" require><br>
        <label for="n1">Ingrese un Número</label>
        <input type="number" name="n2" require><br>
        <input type="submit" value="SUMAR">
    </form>
</body>
</html>