<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <!-- Titulo -->
    <h1>INICIO SESION</h1>
    <!-- Formulario post -->
    <form action="" method="post">
        <input type="text" name="user" placeholder="Ingrese su usuario" require><br>
        <input type="password" name="pass" placeholder="Ingrese su contraseña" require><br>
        <input type="submit" value="INGRESAR">
    </form>
</body>
</html>

<?php
    //validar si se envia user y pass en post
    if(isset($_POST["user"]) && isset($_POST["pass"])){
        //asignacion de variables post
        $user=$_POST["user"];
        $pass=$_POST["pass"];

        //si el usuario o contraseña no coinciden da acceso denegado
        if($user!="admin" || $pass!="1234"){
            echo "Acceso Denegado";
        }
        //sino da bienvenida
        else{
            echo "Bienvenido administrador";
        }
    }
?>