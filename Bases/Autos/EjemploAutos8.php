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
