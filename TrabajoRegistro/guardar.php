<?php
    include("conexion.php");
    
    if(!empty($_POST['primerNombre']) && !empty($_POST['primerApellido']) && !empty($_POST['fechaNacimiento']) && !empty($_POST['edad']) && 
       !empty($_POST['telefono']) && !empty($_POST['correo']) && !empty($_POST['direccion']) && !empty($_POST['ciudad']) && 
       !empty($_POST['usuario']) && !empty($_POST['confirmarUsuario']) && !empty($_POST['clave']) && !empty($_POST['confirmarClave']))
       {
            $primerNombre = trim($_POST['primerNombre']);
            $segundoNombre = isset($_POST['segundoNombre']) ? trim($_POST['segundoNombre']) : ''; // para enviar un dato vacio en caso de no tener segundo nombre
            $primerApellido = trim($_POST['primerApellido']);
            $segundoApellido = isset($_POST['segundoApellido']) ? trim($_POST['segundoApellido']) : ''; // para enviar un dato vacio en caso de no enviar segundo apellifo
            $fechaNacimiento = trim($_POST['fechaNacimiento']);
            $edad = trim($_POST['edad']);
            $telefono = trim($_POST['telefono']);
            $correo = trim($_POST['correo']);
            $direccion = trim($_POST['direccion']);
            $ciudad = trim($_POST['ciudad']);
            $usuario = trim($_POST['usuario']);
            $confirmarUsuario = trim($_POST['confirmarUsuario']);
            $clave = $_POST['clave'];
            $confirmarClave = $_POST['confirmarClave'];

        if ($usuario !== $confirmarUsuario) {
            header("Location: registrar.php?error=Los nombres de usuario no coinciden");
            exit;
        }

        if ($clave !== $confirmarClave) {
            header("Location: registrar.php?error=Las contraseñas no coinciden");
            exit;
        }

        $check = $con->prepare("SELECT * FROM usuarios WHERE usuario = ? OR correo = ?");
        $check->bind_param("ss", $usuario, $correo);
        $check->execute();
        $result = $check->get_result();

        if($result->num_rows > 0){
            header("Location: registrar.php?error=El usuario o correo ya existen");
            exit;
        }

        $claveHash = password_hash($clave, PASSWORD_DEFAULT);

        $stmt = $con->prepare("INSERT INTO usuarios (primerNombre, segundoNombre, primerApellido, segundoApellido, fechaNacimiento, edad, telefono, correo, direccion, ciudad, usuario, clave) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssssissssss", $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $fechaNacimiento, $edad, $telefono, $correo, $direccion, $ciudad, $usuario, $claveHash);
        
        if($stmt->execute()){
            header("Location: registrar.php?mensaje=Usuario registrado exitosamente");
        } else {
            header("Location: registrar.php?error=Error al registrar el usuario: " . $stmt->error);
        }
        
        $stmt->close();
        $check->close();
        $con->close();
    }
    else {
        header("Location: registrar.php?error=Complete todos los campos obligatorios");
        exit;
    }
?>