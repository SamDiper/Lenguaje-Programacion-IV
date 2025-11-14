<?php 
    //validar que el post de num no sea null
    if(isset($_POST["num"])){
        //asignacion de variable post
        $n1=$_POST["num"];
        //si la edad enviada es mayor o igual a 18 es mayor de edad
        if ($n1>=18) {
            echo "Es mayor de edad";
        }
        //sino es menor de edad
        else{
            echo "Es menor de edad";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <!-- Titulo -->
    <h1>EVALUACION DE EDAD</h1>
    <!-- Formulario post -->
    <form action="" method="post">
        <input type="number" name="num">
        <input type="submit" value="EVALUAR">
    </form>
</body>
</html>