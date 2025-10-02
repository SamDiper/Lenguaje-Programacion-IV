<?php

if($_POST){
    $User = $_POST['txtUser'];
    $Pass = $_POST['txtPass'];
    echo "Acceso permitido para $User ";
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
    <form action="login.php" method="post">
        <br>
        <label for="Usuario">Usuario:</label>
        <input type="text" name="txtUser" id="" required>
        <br><br>
        <label for="Correo">Contraseña:</label>
        <input type="password" name="txtPass" id="" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>