<?php
if (!isset($_COOKIE['sesion'])) {
    $sesion = sha1(uniqid());
    $fecha = date('\l\e d/m/Y a las H:i:s');
    
    setcookie('sesion',$sesion);
    setcookie('fecha',$fecha);
    
    $mensaje = "Nueva sesion: $sesion - $fecha";
} else {
    $sesion = $_COOKIE['sesion'];
    $fecha = $_COOKIE['fecha'];

    $mensaje = "Sesion ya iniciada: $sesion - $fecha";
}
$actual = 'Hoy es el día ' . date('d/m/Y') . 
        '; son las ' . date('H:i:s');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina 2</title>
    </head>
    <body>
        <div>
            <b>Pagina 2 - <?= $actual; ?> </b><br>
            <?= $mensaje; ?><br>
            <!-- enlace a la pagina 2 -->
            <a href="sesCookiePagina1.php">Pagina 1 </a>
                
            </form>
        </div>
    </body>
</html>