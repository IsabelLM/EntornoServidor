<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo 'nombre=', $_SESSION['nombre'],'<br>';
        ?>
        <a href="sesion3.php">Pagina 3</a><br>
    </body>
</html>
