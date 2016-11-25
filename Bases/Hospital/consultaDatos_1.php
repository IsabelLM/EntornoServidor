<?php
$serverName = "C6PC4\sqlexpress";
$connectionInfo = array("Database" => "Hospital", "ReturnDatesAsStrings" => true, "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

/* Iniciar la transacción. */
if (sqlsrv_begin_transaction($conn) === false) {
    die(print_r(sqlsrv_errors(), true));
}

$sql = "SELECT * FROM Paciente";
$stmt = sqlsrv_query($conn, $sql);
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table{
               border: 1px solid black; 
               border-collapse: collapse;
            }
            td{
                padding: 2px 5px;
            }
        </style>
    </head>
    <body>
        <table border="1">
            <tr>
                <td><strong>Id</strong></td>
                <td><strong>NumSS</strong></td>
                <td><strong>Nombre</strong></td>
                <td><strong>Apellido</strong></td>
                <td><strong>Fecha Nacimiento</strong></td>
                <td><strong>Genero</strong></td>
            </tr>
            <?php
            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['IdPaciente'] . "</td><td>" . $row['NumSS'] .
                "</td><td>" . $row['Nombre'] . "</td><td>" .
                $row['Apellido'] . "</td><td>" . $row['FNacimiento'] . "</td><td>" .
                $row['Genero'] . "</td>";
                echo "<tr>";
            }
            sqlsrv_free_stmt($stmt);
            ?>
        </table>
    </body>
</html>





