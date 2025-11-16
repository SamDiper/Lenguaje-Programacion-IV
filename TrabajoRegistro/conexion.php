<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="registro";

    $con=new mysqli($host,$user,$pass,$db);

    if($con->connect_error){
        die("Error en la conexion: $con->connect_error");
    }