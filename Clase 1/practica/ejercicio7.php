<?php
if($_POST){
    $numero=$_POST["numero"];
    for ($i=1; $i <= $numero; $i++) {
        if($numero%$i == 0){
            echo "$i,";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio7.php" method="post">
        <label for='numero'>Ingresa un número</label><br>
        <input type='number' name='numero' require><br>
            
        <input type="submit">
    </form>
</body>
</html>