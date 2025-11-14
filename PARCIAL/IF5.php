<?php 
    if(isset($_POST["num"])){
        //asignacion de varibale post
        $n1=$_POST["num"];
        // la temperatura enviada es mayor o igual a 10 y es menor o igual a 30 está templado
        if ($n1>=10 && $n1<=30) {
            echo "Templado";
        }
        //si es menor a 10 está frio
        elseif($n1<10){
            echo "Frio";
        }
        //sino (es mayor a 30) está caluroso
        else{
            echo "Caluroso";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <!-- Titulo -->
    <h1>EVALUACION DE TEMPERATURA</h1>
    <!-- Formulario post -->
    <form action="" method="post">
        <input type="float" name="num">
        <input type="submit" value="EVALUAR">
    </form>
</body>
</html>