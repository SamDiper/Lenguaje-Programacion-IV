<?php
    //validar que exista un submit post
    if($_POST){
        //asignacion de variables post
        $clave=$_POST["clave"];
        //si la clave es igual a php2025 dar acceso
        if($clave=="php2025"){
            echo "Acceso correcto";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body> 
    <!-- Titulo -->
    <h1>VERIFICACION DE CONTRASEÑA</h1>
    <!-- formuhlario post -->
    <form action="" method="post">
        <input type="text" name="clave">
        <input type="submit" value="INGRESAR">
    </form>
</body>  
</html>