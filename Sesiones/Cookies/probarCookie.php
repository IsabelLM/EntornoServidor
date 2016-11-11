<?php
if(!isset($_GET['vuelta'])){
    setcookie('prueba','prueba');
    header('Location: probarCookie.php?vuelta=1');
    exit;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comprobar si el equipo acepta las cookies</title>
    </head>
    <body>
        <?php
        if(isset($_COOKIE['prueba'])){
            echo 'Cookie aceptada';
        }else{
            echo 'Cookie rechazada';
        }
        ?>
    </body>
</html>
