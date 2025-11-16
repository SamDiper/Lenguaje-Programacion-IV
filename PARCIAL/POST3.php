<?php
    //declaración de arreglos vacíos para los datos 
    $nombres=[];
    $correos=[];
    $edades=[];

    //validar que hayan valores previos como una especie de datos temporales de sesion con el json_decode para pasar el string a Array
    if (isset($_POST["nombres_previos"])) {
        $nombres = json_decode($_POST["nombres_previos"]);
    }
    if (isset($_POST["correos_previos"])) {
        $correos = json_decode($_POST["correos_previos"]);
    }
    if (isset($_POST["edades_previas"])) {
        $edades = json_decode($_POST["edades_previas"]);
    }

    //verificar si se envió un registro nuevo completo
    if(isset($_POST["nombre"]) && isset($_POST["correo"]) && isset($_POST["edad"])){

        //asignacion de variables post
        $nombre=$_POST["nombre"];
        $correo=$_POST["correo"];
        $edad=$_POST["edad"];

        //agregar los nuevos valores a los arreglos respectivos
        array_push($nombres,$nombre);
        array_push($correos,$correo);
        array_push($edades,$edad);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <!-- Titulo -->
    <h1>FORMULARIO REGISTRO</h1>
    <!-- Formulario post  -->
    <form action="" method="post">
        <!-- Campos ocultos que guardan los valores enviados como objetos para convertirlos luego -->
        <input type="hidden" name="nombres_previos" value='<?= json_encode($nombres) ?>'>
        <input type="hidden" name="correos_previos" value='<?= json_encode($correos) ?>'>
        <input type="hidden" name="edades_previas"  value='<?= json_encode($edades) ?>'>

        <!-- Campos visibles para ingresar nuevos registros -->
        <input type="text" name="nombre" placeholder="Ingrese su nombre" require><br>
        <input type="correo" name="correo" placeholder="Ingrese su correo" require><br>
        <input type="number" name="edad" placeholder="Ingrese su edad" require><br>
        <input type="submit" value="REGISTRAR">
    </form>

    <!-- Tabla para mostrar los datos -->
    <table>
        <thead>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>EDAD</th>
        </thead>
        <tbody>
            <?php
                //recorrer los array y mostrar los registros en una fila segun la estructura de las tablas en html
                for ($i = 0; $i < count($nombres); $i++) {
                    echo "<tr>";
                    echo "<td>$nombres[$i]</td>";
                    echo "<td>$correos[$i]</td>";
                    echo "<td>$edades[$i]</td>";
                    echo "</tr>";
                }    
            ?>
        </tbody>
    </table>
</body>
</html>