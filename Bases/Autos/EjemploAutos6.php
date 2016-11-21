<?php

$serverName = "C6PC4\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array("Database" => "Autos");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$sql = "UPDATE Distribucion SET cantidad = ? WHERE CodCoche = ?";
$params = array(4, "0006");
$cursor = sqlsrv_query($conn, $sql, $params);

$filasAfectadas = sqlsrv_rows_affected($cursor);

if ($filasAfectadas === false) {
    die(print_r(sqlsrv_errors(), true));
} elseif ($filasAfectadas == -1) {
    echo "No hay información disponible <br>";
} else {
    echo $filasAfectadas . " filas actualizadas <br>";
}