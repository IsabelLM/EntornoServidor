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
            <form action="sesionFormPagina1.php" method="post">
                <div>
                    <input type="hidden" name="sesion" value="<?=$sesion;?>"/>
                    <input type="hidden" name="fecha" value="<?=$fecha;?>"/>
                    <input type="submit" name="pagina1" value="Pagina 1"/>
                </div>
                   
                
            </form>
        </div>
    </body>
</html>