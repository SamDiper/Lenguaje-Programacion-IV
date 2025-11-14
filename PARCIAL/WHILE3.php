<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <!-- Titulo -->
    <h1>TABLA DE MULTIPLICAR</h1>
    <!-- Formulario post -->
    <form action="" method="post">
        <input type="float" name="num">
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>
<?php 
    //validar si existe submit post de num
    if(isset($_POST["num"])){
        //asignacion de variable post
        $n1=$_POST["num"];
        //contador en 1 para evitar un 0*$n1 y que todo sea 0
        $a=1;
        //ciclo para las multiplicaciones del 1 al 10
        do {
            echo "$n1 x $a = ".$n1*$a."<br>";
            $a++;
        } while ($a <= 10);
    }
?>