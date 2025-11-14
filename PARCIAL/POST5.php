<?php 
    //validar si existe envío post en num
    if(isset($_POST["num"])){
        //asignacion de variable post
        $n1=$_POST["num"];
        //mostrar conversión de pesos colombianos a dólares 1 dolar es = 4000 pesos colombianos entonces su conversion es pesos/4000
        echo "$$n1 COP -> ".($n1/4000)."$ USD";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <!-- Titulo -->
    <h1>CONVERSOR DE COP A USD</h1>
    <!-- Formulario post -->
    <form action="" method="post">
        <input type="number" name="num">
        <input type="submit" value="CONVERTIR">
    </form>
</body>
</html>