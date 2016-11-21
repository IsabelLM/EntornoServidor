<?php

$serverName = "C6PC4\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array("Database" => "Autos");
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$sql = "SELECT Pvp FROM Venta";
$cursor = sqlsrv_query($conn, $sql);


if ($cursor === false) {
    die(print_r(sqlsrv_errors(), true));
} if (sqlsrv_execute($cursor) === false)  {
        die(print_r(sqlsrv_errors(), true));
}

$totalVentas = 0;
$cuenta = 0;
while(($fila = sqlsrv_fetch_array($cursror)) && $totalVentas <=10000){
    $pvp = $fila[0];
    $totalVentas += $pvp;
    $cuenta++;
}
echo "$cuenta ventas contabilizadas para los primeros $totalVentas € de ingresos. <br>";

sqlsrv_cancel($cursor);
