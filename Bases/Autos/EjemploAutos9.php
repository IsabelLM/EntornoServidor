<?php

$serverName = "C6PC4\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array("Database" => "Autos");
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$sql = "SELECT * FROM Coche";
$cursor = sqlsrv_query($conn, $sql);
if ($cursor === false) {
    die(print_r(sqlsrv_errors(), true));
}
$numColum = sqlsrv_num_fields($cursor);
while (sqlsrv_fetch($cursor)) {
    for ($i = 0; $i < $numColum; $i++) {
        echo sqlsrv_get_field($cursor, $i) . " ";
    }
    echo "<br>";
}
    