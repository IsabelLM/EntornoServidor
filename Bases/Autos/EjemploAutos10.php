<?php

$serverName = "C6PC4\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array("Database" => "Autos");
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$sql = "INSERT INTO prueba (data, id) VALUES (?,?); SELECT * FROM prueba;";
$params = array("algunos datos", 1);
$cursor = sqlsrv_query($conn, $sql, $params);

echo "Filas afectadas : " . sqlsrv_rows_affected($cursor) . "<br>";

$siguienteResultado = sqlsrv_next_result($cursor);
if ($siguienteResultado) {
    while ($fila = sqlsrv_fetch_array($cursor, SQLSRV_FETCH_ASSOC)) {
        echo $fila['id'] . ": " . $fila['data'] . "<br>";
    }
} elseif (is_null($siguienteResultado)) {
    echo "No hay mas resultados. <br>";
} else {
    die(print_r(sqlsrv_errors(), true));
}
