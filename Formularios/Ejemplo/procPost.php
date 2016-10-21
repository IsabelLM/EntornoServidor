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
        $nombre = $_POST['nombre'];
        $modulos = $_POST['modulos'];
        echo "Nombre: " . $nombre . "<br>";
        foreach ($modulos as $modulo) {
            echo "Modulo: " . $modulo . "<br>";
        }
        print_r($_POST);
        ?>
    </body>
</html>
