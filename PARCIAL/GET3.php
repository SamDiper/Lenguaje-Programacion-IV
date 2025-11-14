<?php
    //validacion de envio de submit de get
    if($_GET){
        //asignacion de variables desde URL
        $valor=$_GET["valor"];
        $tipo=$_GET["cliente"];

        //si no existe un valor y no es un numero no es posible de operar is_numeric valida si es un tipo numerico
        if(!($valor) || !is_numeric($valor)) 
        {
            echo "El valor no es valido para operar";
        }else{
            //si el tipo de usuario es vip da un descuento del 20%
            if($tipo=="vip"){
                $desc=$valor*0.2;
                $valor=$valor-$desc;
                echo "valor de compra $valor con descuento VIP";
            }
            //si el tipo de usuario es nuevo da un descuento del 10%
            elseif($tipo=="nuevo"){
                $desc=$valor*0.1;
                $valor=$valor-$desc;
                echo "valor de compra $valor con descuento para Nuevos";
            }
            //si no cumple ninguna de las dos da el valor de compra sin descuentos
            else{
                echo "valor de compra $valor";
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <!-- Instrucciones para enviar los datos -->
    <p>Añade a la URL <b>?valor=< valor >&cliente=< tipo ><b></p>
</body>  
</html>