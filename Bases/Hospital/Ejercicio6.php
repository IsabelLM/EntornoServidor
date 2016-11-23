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
$sql1 = "UPDATE Paciente set Nombre = REPLACE(Nombre, 'J','') WHERE Nombre like 'J%'";
$cursor = sqlsrv_query($conn, $sql1);

$sql2 = "SELECT *  FROM paciente";
$cursor2 = sqlsrv_query($conn, $sql2);
if ($cursor2 === false) {
    dis(print_r(sqlsrv_errors(), true));
}

while($fila=sqlsrv_fetch_array($cursor2, SQLSRV_FETCH_NUMERIC)){
    echo $fila[0],", ".$fila[1]," ,".$fila[2]." ".$fila[3].", ".$fila[4].", ".$fila[5]."<br>";
}
