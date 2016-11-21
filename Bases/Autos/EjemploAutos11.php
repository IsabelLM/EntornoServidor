<?php

$serverName = "C6PC4\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array("Database" => "Autos");
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}


$sql = "UPDATE prueba SET data = ( ?) WHERE id = 100";

$datos = fopen("data://text/plain,[ Contenido largo aqui.]", "r");
$params = array(&$datos);


$opciones = array("SendStreamParamsAtExec" => 0);
$cursor = sqlsrv_prepare($conn, $sql, $params, $opciones);


sqlsrv_execute($cursor);

$i = 1;
while (sqlsrv_send_stream_data($cursor)) {
    $i++;
}
echo "$i llamadas realizadas";