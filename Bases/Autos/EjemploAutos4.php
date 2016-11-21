<?php

$serverName = "C6PC4\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array("Database" => "Autos");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$cursor = sqlsrv_query($conn, "SELECT * FROM Coche");
if ($cursor) {
    $filas = sqlsrv_has_rows($cursor);
    if ($filas === true) {
        echo "Hay filas.<br>";
    } else {
        echo "No hay filas. <br>";
    }
}
?>
