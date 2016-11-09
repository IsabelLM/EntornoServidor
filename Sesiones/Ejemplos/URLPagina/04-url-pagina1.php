<?php 
$nombre = 'unNombre';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina URL1</title>
    </head>
    <body>
        <div>
            <!--Enlace a la pagina 2 pasando el valor de $nombre en la URL-->
            <a href="04-url-pagina2.php?nombre=<?php echo $nombre;?>">Página 2</a>
        </div>
    </body>
</html>
