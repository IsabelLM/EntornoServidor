<?php

$serverName = "C6PC4\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array("Database" => "Hospital", "CharacterSet" => "UTF-8", "ReturnDatesAsStrings" => true);
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn === false) {
    echo "no funciona la conexion <br>";
    die(print_r(sqlsrv_errors(), true));
} else {
    echo "Conectado.<br>";
}


$sql = "SELECT *  FROM paciente WHERE Nombre LIKE '%a%' ";
$cursor = sqlsrv_query($conn, $sql);
if ($cursor === false) {
    dis(print_r(sqlsrv_errors(), true));
}

if ($cursor) {
    $rows = sqlsrv_has_rows($cursor);
    if ($rows === true) {
        echo "Hay filas. <br />";
        while($fila = sqlsrv_fetch_array($cursor)){
            echo $fila[0],", ".$fila[1].", ".$fila[2]." ".$fila[3].", ".$fila[4].", ".$fila[5]."<br>";
        }
    } else {
        echo "No hay filas. <br />";
    }
}

