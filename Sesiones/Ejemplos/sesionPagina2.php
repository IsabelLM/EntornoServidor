<?php
session_start(); //Llamada a session_start.
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php
            echo '$_SESSION[\'nombre\']=',
            isset($_SESSION['nombre'])?$_SESSION['nombre']:'', '<br>';
            echo '$_SESSION[\'informacion\'][\'apellido\'] =',
                    isset($_SESSION['informacion']['apellido'])?$_SESSION['informacion']['apellido']:'','<br>';
            ?>
        </div>
    </body>
</html>
