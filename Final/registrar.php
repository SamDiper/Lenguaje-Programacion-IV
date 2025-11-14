<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <h2>Registrar Nuevo Usuario</h2>
    <?php
        if(isset($_GET["mensaje"])){
            echo "<p>". htmlspecialchars($_GET["mensaje"]). "</p>";
        }
        if(isset($_GET["error"])){
            echo "<p>". htmlspecialchars($_GET["error"]). "</p>";
        }
    ?>
    <form action="guardar.php" method="post">
        <label for="usuario">Usuario</label><br>
        <input type="text" name="usuario" required><br>
        
        <label for="clave">Contraseña</label><br>
        <input type="password" name="clave" required><br>
        
        <label for="confirmar">Confirmar Contraseña</label><br>
        <input type="password" name="confirmar" required><br>
        
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" required><br>
        
        <label for="apellido">Apellido</label><br>
        <input type="text" name="apellido" required><br>
        
        <label for="telefono">Telefono</label><br>
        <input type="text" name="telefono" required><br>
        
        <label for="email">Correo Electronico</label><br>
        <input type="email" name="email" required><br>
        
        <input type="submit" value="REGISTRARSE">
    </form>
    <p><a href="login.php">Iniciar Sesion</a></p>
</body>
</html>