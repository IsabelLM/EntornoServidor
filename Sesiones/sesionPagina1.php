<?php 
//Abrir/reactivar la sesión.
session_start();
//Guardar dos informaciones en la sesión.
$_SESSION['nombre']='nombreSesion';
$_SESSION['informacion']=['nombre'=>'unNombre', 'apellido'=>'unApellido'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sesión Página 1</title>
    </head>
    <body>
        <div><a href="sesionPagina2.php">Pagina 2</a></div>
    </body>
</html>
