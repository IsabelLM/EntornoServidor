<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $datos=['nombre' =>'unNombre & otroNombre', 'masNombres + otroNombreMas'];
        echo http_build_query($datos),'<br>';
        echo http_build_query($datos,'v_'),'<br>';
        ?>
    </body>
</html>
