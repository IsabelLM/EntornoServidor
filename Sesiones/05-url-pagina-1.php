<?php
    $nombre = 'unNombre & otroNombre';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <!--Enlace a la pagina 2 pasando el valor de $nombre en la URL-->
            <a href="05-url-pagina-2.php?nombre=<?php echo $nombre;?>">Página 2</a>
        </div>
    </body>
</html>
