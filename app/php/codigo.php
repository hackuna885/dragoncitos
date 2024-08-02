<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Chihuahua');
session_start();


$codigo = (isset($_GET['codigo'])) ? $_GET['codigo'] : '';

$fechaCap = date('d-m-Y');
$horaCap = date('g:i:s a');

$con = new SQLite3("../data/data.db");
$cs = $con -> query("SELECT numIdentData,estatus,fecha FROM infoDragoncitos WHERE numIdentData = '$codigo'");

while ($resul = $cs -> fetchArray()) {
    $numIdentData = $resul['numIdentData'];
    $estatus = $resul['estatus'];
    $fecha = $resul['fecha'];
}

$numIdentData = (isset($numIdentData)) ?  $numIdentData : '';
$fecha = (isset($fecha)) ?  $fecha : '';

if($codigo  === $numIdentData && $fecha  === $fechaCap ){
    $cs = $con -> query("UPDATE infoDragoncitos SET estatus = '2', hSal = '$horaCap' WHERE fecha = '$fechaCap'");

    // echo "Salida Registrada";

    echo "<script>window.location='../salida/registro.aspx'</script>";

}else{
    $cs = $con -> query("INSERT INTO infoDragoncitos (numIdentData,estatus,fecha,hEnt,hSal) VALUES('$codigo','1','$fechaCap','$horaCap','')");
    
    // echo "Entrada Registrada";

    echo "<script>window.location='../entrada/registro.aspx'</script>";
}
$con -> close();



?>