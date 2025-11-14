<?php
    //array vacio para notas
    $notas=[];
    //isset para evitar null
    if(isset($_POST["nota_anterior"])){
        //json_decode para convertir el array a string de la nota anterior
        $notas = json_decode($_POST["nota_anterior"]);
    }

    if(isset($_POST["nota"])){
        //traer la variable enviada con post
        $nota=$_POST["nota"];

        //si nota es mayor o igual a 0 ingresarla al array
        if($nota>=0){
            array_push($notas, $nota);
        }

        //recorrer el array de notas para imprimir las notas que se han ingresado
        foreach ($notas as $i => $value) {
            //$i+1 para que no me muestre nota 0, nota 1; sino para que me muestre directamente nota 1...
            echo "nota ". ($i+1) ." = ".$value."<br>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>
<body>
    <!-- formulario post -->
    <form action="" method="post">
        <?php
        //asegurarse que si nota es null o que si es mayor a 0 (positiva) me muestre el form
        if (!isset($nota) || $nota >= 0) {
            //json_encode para pasar lo que hay en el string a array y arriba lo puedan convertir nuevamente para que sea un almacenamiento de sesión
            echo '<input type="hidden" name="nota_anterior" value='. json_encode($notas).'><br>';
            echo '<input type="number" step="any" name="nota" placeholder="Agregar una Nota"><br>';
            echo '<input type="submit" value="GUARDAR NOTA"><br><br>';
        }
        else{
            //array_sum suma los elementos que tiene el array y count retorna la cantidad de numeros que hay en el array
            echo "El promedio de las notas es = ". array_sum($notas)/count($notas);
        }

        ?>
    </form>
</body>
</html>