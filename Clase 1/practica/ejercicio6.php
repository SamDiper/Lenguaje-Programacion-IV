<?php
$cantidad = 0;

if (isset($_POST['cantidad']) && !isset($_POST['numero1'])) {
    $cantidad = $_POST['cantidad'];
}

if (isset($_POST['numero1'])) {
    $cantidad = $_POST['cantidadOriginal'];
    $suma = 0;

    for ($i = 1; $i <= $cantidad; $i++) {
        $suma += $_POST["numero$i"];
    }

    $promedio = $suma / $cantidad;
    echo "<h3>El promedio de los $cantidad números es: <strong>$promedio</strong></h3>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promedio dinámico</title>
</head>
<body>
    <form action="ejercicio6.php" method="post">
        <?php if ($cantidad == 0): ?>
            <label for="cantidad">Digite la cantidad de números a evaluar</label><br>
            <input type="number" name="cantidad" required min="1"><br><br>
            <input type="submit" value="Continuar">

        <?php else: ?>
            <?php
            for ($i = 1; $i <= $cantidad; $i++) {
                echo "<label for='numero$i'>Número $i:</label><br>";
                echo "<input type='number' name='numero$i' step='any' required><br><br>";
            }
            ?>
            <input type="hidden" name="cantidadOriginal" value="<?php echo $cantidad; ?>">
            <input type="submit" value="Calcular Promedio">
        <?php endif; ?>
    </form>
</body>
</html>