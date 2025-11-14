<?php 
    //validar que el post de num no sea null  
    if(isset($_POST["num"])){
        //asignacion de variable post
        $n1=$_POST["num"];
        //si la nota enviada es mayor o igual a 3 aprobó
        if ($n1>=3.0) {
            echo "Aprobado";
        }
        //sino reprobó
        else{
            echo "Reprobado";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <!-- Titulo -->
    <h1>EVALUACION DE NOTA</h1>
    <!-- Formulario post -->
    <form action="" method="post">
        <input type="float" name="num">
        <input type="submit" value="EVALUAR">
    </form>
</body>
</html>