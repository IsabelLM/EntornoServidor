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

