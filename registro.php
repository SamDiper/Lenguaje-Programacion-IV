<?php

if($_POST){
    $Nombre = $_POST['txtNombre'];
    $Correo = $_POST['txtCorreo'];
    echo "Bienvenido, $Nombre. Tu correo es $Correo ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="registro.php" method="post">
        <br>
        <label for="Nombre">Nombre:</label>
        <input type="text" name="txtNombre" id="">
        <br><br>
        <label for="Correo">Correo:</label>
        <input type="email" name="txtCorreo" id="">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>