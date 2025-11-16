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
            echo "<p style='color: green;'>". htmlspecialchars($_GET["mensaje"]). "</p>";
        }
        if(isset($_GET["error"])){
            echo "<p style='color: red;'>". htmlspecialchars($_GET["error"]). "</p>";
        }
    ?>
    <form action="guardar.php" method="post">
        <label for="primerNombre">Primer Nombre</label><br>
        <input type="text" name="primerNombre" required><br>
        
        <label for="segundoNombre">Segundo Nombre</label><br>
        <input type="text" name="segundoNombre"><br>
        
        <label for="primerApellido">Primer Apellido</label><br>
        <input type="text" name="primerApellido" required><br>
        
        <label for="segundoApellido">Segundo Apellido</label><br>
        <input type="text" name="segundoApellido"><br>
        
        <label for="fechaNacimiento">Fecha Nacimiento</label><br>
        <input type="date" name="fechaNacimiento" required><br>
        
        <label for="edad">Edad</label><br>
        <input type="number" name="edad" required><br>
        
        <label for="telefono">Telefono</label><br>
        <input type="text" name="telefono" required><br>
        
        <label for="correo">Correo Electronico</label><br>
        <input type="correo" name="correo" required><br>

        <label for="direccion">Direccion</label><br>
        <input type="text" name="direccion" required><br>

        <label for="ciudad">Ciudad</label><br>
        <input type="text" name="ciudad" required><br>

        <label for="usuario">Usuario</label><br>
        <input type="text" name="usuario" required><br>

        <label for="confirmarUsuario">Confirmar Usuario</label><br>
        <input type="text" name="confirmarUsuario" required><br>

        <label for="clave">Contraseña</label><br>
        <input type="password" name="clave" required><br>

        <label for="confirmarClave">Confirmar Contraseña</label><br>
        <input type="password" name="confirmarClave" required><br>
        
        <input type="submit" value="REGISTRARSE">
    </form>
</body>
</html>