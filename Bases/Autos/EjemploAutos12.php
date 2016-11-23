<?php

$serverName = "C6PC4\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array("Database" => "Autos");
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

if (sqlsrv_begin_transaction($conn) === false) {
    die(print_r(sqlsrv_errors(), true));
}

$cif = '0004';
$dni = '0009';
$coche = '0014';
$color = 'ROJO';
$pv = 4515;

$sql1 = "INSERT INTO Venta (CifConce, Dni, CodCoche, Color, Pvp) VALUES (?, ?,? ,?,?)";

$params1 = array($cif, $dni, $coche, $color, $pv);
$cursor1 = sqlsrv_query($conn, $sql1, $params1);

$sql2 = "UPDATE Distribucion SET Cantidad = (Cantidad - 1) WHERE CifConce = ? AND CodCoche = ?";

$params2 = array($cif, $coche);
$cursor2 = sqlsrv_query($conn, $sql2, $params2);

if ($cursor1 && $cursor2) {
    sqlsrv_commit($conn);
    echo "Transacción consolidada<br>";
} else {
    sqlsrv_rollback($conn);
    echo "Transaccion revertida. <br>";
}

