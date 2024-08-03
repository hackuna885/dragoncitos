<?php


error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Chihuahua');
session_start();



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salida</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        .tabMin {
            font-size: .8em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <img src="../img/enca.jpg" class="img-fluid" alt="pleca">
                <br>
                <br>
                <br>
                <h1>Reporte</h1>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Num</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Entrada</th>
                            <th scope="col">Salida</th>
                        </tr>
                    </thead>
                    <tbody>
<?php

$con = new SQLite3("../data/data.db");
$cs = $con -> query("SELECT * FROM reporte");

while ($resul = $cs -> fetchArray()) {
    $numIdentData = $resul['numIdentData'];
    $nomCompleto = $resul['nomCompleto'];
    $fecha = $resul['fecha'];
    $hEnt = $resul['hEnt'];
    $hSal = $resul['hSal'];


    echo '

    <tr>
        <td scope="row" class="tabMin">'.$numIdentData.'</td>
        <td class="tabMin">'.$nomCompleto.'</td>
        <td class="tabMin">'.$fecha.'</td>
        <td class="tabMin">'.$hEnt.'</td>
        <td class="tabMin">'.$hSal.'</td>
    </tr>
    
    ';
}

$con -> close();

?>
                    </tbody>
                </table>
                <br>
                <br>
            </div>
        </div>

    </div>
</body>
</html>