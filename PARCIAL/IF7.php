<?php 
    //validar que exista un envío POST para variable num
    if(isset($_POST["num"])){
        //asignacion de variable post
        $n1=$_POST["num"];
        //evaluar si la nota está entre 0 y 2.9 es reprobado
        if ($n1>=0 && $n1<=2.9) {
            echo "Reprobado";
        }
        //evaluar si la nota está entre 3 y 4.4 es aprobado
        elseif($n1>=3 && $n1<=4.4){
            echo "Aprobado";
        }
        //evaluar si la nota está entre 4.5 y 5 es excelente
        elseif($n1>=4.5 && $n1<=5){
            echo "Excelente";
        }
        //sino significa que está fuera de los rangos
        else{
            echo "Nota no valida";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <!-- Titulo -->
    <h1>TIPO DE NOTA</h1>
    <!-- Formulario post -->
    <form action="" method="post">
        <input type="float" name="num">
        <input type="submit" value="EVALUAR">
    </form>
</body>
</html>