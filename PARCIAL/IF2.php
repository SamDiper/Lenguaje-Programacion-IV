<?php 
    //validar que el post de num no sea null
    if(isset($_POST["num"])){
        //asignacion de variable post
        $n1=$_POST["num"];
        //si el modular/residuo de la division entre 2 es 0 significa que es par
        if ($n1%2==0) {
            echo "El número es par";
        }
        //sino es impar
        else{
            echo "El número es impar";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <!-- Titulo -->
    <h1>PARES O IMPARES</h1>
    <!-- Formulario post -->
    <form action="" method="post">
        <input type="number" name="num">
        <input type="submit" value="EVALUAR">
    </form>
</body>
</html>