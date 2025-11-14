<?php
    include("conexion.php");
    if(!empty($_POST['usuario']) && !empty($_POST['clave']) && !empty($_POST['confirmar']) && !empty($_POST['nombre']) && !empty($_POST['apellido'])  && !empty($_POST['telefono']) && !empty($_POST['email'])){
        $usuario = trim($_POST['usuario']);
        $clave = $_POST['clave'];
        $confirmar = $_POST['confirmar'];
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $telefono = trim($_POST['telefono']);
        $correo = trim($_POST["email"])


        if ($clave !== $confirmar) {
            header( "Location: registrar.php?error=Las contraseñas no coinciden");
            exit;
        }

         $check = $con->prepare("SELECT * FROM usuarios WHERE usuario = ? OR correo = ?");
         $check->bind_param("ss",$usuario,$correo);
         $check->execute();
         $result = $check->get_result();

         if($result->num_rows>0){
            header( "Location: registrar.php?error=El usuario o correo ya existen");
            exit;
         }

         $claveHash=password_hash($clave,PASSWORD_DEFAULT);

         $stmt=$con->prepare("INSERT INTO usuarios (usuario,clave,nombre,apellido,telefono,correo)
            VALUES (?,?,?,?,?,?)");

         $stmt->bind_param("ssssss",$usuario,$claveHash,$nombre,$apellido,$telefono,$correo);
            if($stmt->execute()){
                header( "Location: registrar.php?mensaje=Usuario registrado");
            }else{
                header( "Location: registrar.php?error=Error al registrar el usuario");
            }
        $stmt->close();
        $con->close();
    }
    else{
        header( "Location: registrar.php?error=Complete todos los campos que son obligatorios");
    }