<?php
$ck1 = setcookie('nombre', 'Juan');
$ck2 = setcookie('apellido', 'Saez', time() + (30 * 24 * 3600));
if ($ck1 && $ck2) {
    $mensaje = 'Cookies depositadas';
} else {
    $mensaje = 'Una cookie no se ha depositado';
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cookie - Pagina 1 </title>
    </head>
    <body>
        <div>
            <?= $mensaje;?><br>
            <a href =" EjemploCookie2.php">Pagina 2</a>
        </div>
    </body>
</html>
