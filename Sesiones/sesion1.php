<?php
session_start();
$_SESSION['nombre'] = 'unNombre';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <b>Pagina 1</b> <br>
            <?php
            echo 'nombre =',$_SESSION['nombre'],'<br>';
            ?>
            <a href="sesion2.php">Pagina 2</a><br>
        </div>
    </body>
</html>
