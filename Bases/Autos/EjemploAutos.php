<?php

$serverName = "C6PC4\SQLEXPRESS"; //serverName\instanceName
// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array("Database" => "Autos");
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn === false) {
    dis(print_r(sqlsrv_errors(), true));
}
$sql = "SELECT CodCoche, Nombre, modelo, Pvp FROM coche";
$cursor = sqlsrv_query($conn, $sql);
if ($cursor === false) {
    dis(print_r(sqlsrv_errors(), true));
}

while($fila=sqlsrv_fetch_array($cursor, SQLSRV_FETCH_NUMERIC)){
    echo $fila[0],", ".$fila[1],".".$fila[2].",".$fila[3]."<br>";
}
sqlsrv_free_stmt($cursor);
?>

