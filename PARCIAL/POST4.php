<?php 
    //validar si existe envío post de num
    if(isset($_POST["num"])){
        //asignacion de variable post
        $n1=$_POST["num"];
        //evaluar si el número es menor a 0 es decir negativo
        if ($n1<0) {
            echo "El número es negativo";
        }
        //sino es positivo
        else{
            echo "El número es positivo";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <!-- Titulo -->
    <h1>POSITIVO O NEGATIVO</h1>
    <!-- Formulario post -->
    <form action="" method="post">
        <input type="number" name="num">
        <input type="submit" value="EVALUAR">
    </form>
</body>
</html>