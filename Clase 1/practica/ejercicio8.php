<?php
$nota='';
if($_POST){
    $nota=$_POST['nota'];
    if($nota){

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
    <?php
        if ($nota!="n") {
            echo "<input type='number' name='nota'>";
        }
    ?>
</body>
</html>