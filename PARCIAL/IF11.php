<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
</head>
<body>
    <!-- Titulo -->
    <h1>INICIO SESION</h1>
    <!-- Formulario post -->
    <form action="" method="post">
        <!-- options para enviar el tipo de usuario -->
        <select name="user" id="">
            <option value="admin">Administrador</option>
            <option value="invitado">Invitado</option>
        </select>
        <!-- Tipo password para que se vea **** en vez de la contraseña -->
        <input type="password" name="pass" placeholder="Ingrese su contraseña" require><br>

        <input type="submit" value="INGRESAR">
    </form>
</body>
</html>

<?php
    //validar si existen los campos user y pass en el post
    if(isset($_POST["user"]) && isset($_POST["pass"])){
        //asignacion de variables post
        $user=$_POST["user"];
        $pass=$_POST["pass"];

        //si la contraseña no es igual a php2025 da acceso denegado
        if($pass!="php2025"){
            echo "Acceso Denegado";
        }
        //si el usuario es admin y la contraseña correcta da acceso completo
        elseif($user=="admin" && $pass=="php2025"){
            echo "Acceso completo";
        }
        //si el usuario es invitado y la contraseña correcta da acceso limitado
        elseif($user=="invitado" && $pass=="php2025"){
            echo "Acceso limitado";
        }
        
    }
?>