<?php


error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Chihuahua');
session_start();

$fechaCap = date('d-m-Y');
$horaCap = date('g:i:s a');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entreada</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <img src="../img/enca.jpg" class="img-fluid" alt="pleca">
                <br>
                <br>
                <br>
                <h1>¡Hola, Bienvenido!</h1>
                <h4>Registro completado a las: <?php echo $horaCap .' del '. $fechaCap?></h4>
                <br>
                <br>
                <img src="../img/dragon.jpg" class="img-fluid" alt="dragon">
                <br>
            </div>
        </div>

    </div>
</body>
</html>