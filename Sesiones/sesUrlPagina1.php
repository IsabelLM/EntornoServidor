<?php
if (!isset($_POST['sesion'])) {
    $sesion = sha1(uniqid());
    $fecha = date('\l\e d/m/Y a las H:i:s');
    $mensaje = "Nueva sesion: $sesion - $fecha";
} else {
    $sesion = $_POST['sesion'];
    $fecha = $_POST['fecha'];

    $mensaje = "Sesion ya iniciada: $sesion - $fecha";
}

$url = "?sesion=$sesion$fecha=" . rawurldecode($fecha);
$actual = 'Hoy es el día' . date('d/m/Y') . '; son las' . date('H:i:s');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina 1</title>
    </head>
    <body>
        <div>
            <b>Pagina 1 - <?= $actual; ?> </b><br>
            <?= $mensaje; ?><br>
            <!-- enlace a la pagina 2 -->
            <a href="sesUrlPagina2.php<?= $url; ?>">Pagina 1</a>
        </div>
    </body>
</html>
