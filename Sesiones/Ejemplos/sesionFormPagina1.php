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
        <title>Pagina 1</title>
    </head>
    <body>
        <div>
            <b>Pagina 1 - <?= $actual; ?> </b><br>
            <?= $mensaje; ?><br>
            <!-- enlace a la pagina 2 -->
            <form action="sesionFormPagina2.php" method="post">
                <div>
                    <input type="hidden" name="sesion" value="<?=$sesion;?>"/>
                    <input type="hidden" name="fecha" value="<?=$fecha;?>"/>
                    <input type="submit" name="pagina2" value="Pagina 2"/>
                </div>
                   
                
            </form>
        </div>
    </body>
</html>