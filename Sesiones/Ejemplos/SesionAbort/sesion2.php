<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
             <b>Pagina 2</b> <br>
            <?php
            echo 'nombre =',$_SESSION['nombre'],'<br>';
            $_SESSION['nombre'] = '?'; //Modifica datos de sesión
            session_abort(); //Anula la sesión o session_reset();
            echo 'nombre = ', $_SESSION['nombre'],'<br>';
            ?>
            <a href="sesion3.php">Pagina 3</a><br>
        </div>
    </body>
</html>
