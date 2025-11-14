<?php
//validar que exista un post
    if($_POST){
        //asignacion de variables post
        $leng=$_POST["leng"];
        //si el lenguaje enviado con el boton hace referencia a español imprimir bienvenido
        if($leng=="es"){
            echo "Bienvenido";
        }
        //si el lenguaje enviado con el boton hace referencia a inglés imprimir welcome 
        if($leng=="en"){
            echo "Welcome";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <!-- Titulo -->
    <h1>TRADUCTOR</h1>
    <!-- Formulario Post -->
    <form action="" method="post">
        <!-- Botones tipo submit que envian un valor a la variable name -->
        <button type="submit" name="leng" value="es">ESPAÑOL</button>
        <button type="submit" name="leng" value="en">INGLÉS</button>
    </form>
</body>
</html>