<?php

$serverName = "C6PC4\SQLEXPRESS"; //serverName\instanceName
// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array("Database" => "Autos");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
$sql = "UPDATE Distribucion SET Cantidad = ? WHERE CifConce = '0002' AND CodCoche = ?";
$cantidad = 0;
$id = "";
$cursor = sqlsrv_prepare($conn, $sql, array(&$cantidad, &$id));

if (!$cursor) {
    die(print_r(sqlsrv_errors(), true));
}
$cantidades = array('0006' => 20, '0008' => 7, '0009' => 15);

foreach ($cantidades as $id => $cantidad) {
    if (sqlsrv_execute($cursor) === false) {
        die(print_r(sqlsrv_errors(), true));
    }
}
?>
