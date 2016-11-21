<?php
$serverName = "C6PC4\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array("Database" => "Autos");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$sql = "SELECT*FROM Coche";
$params = array();
$opciones = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$cursor = sqlsrv_query($conn, $sql, $params, $opciones);

$numFilas = sqlsrv_num_rows($cursor);


    if($numFilas===false){
        echo "Error al recuperar el número de filas.<br>";
    }else{
        echo $numFilas;
    }

?>
