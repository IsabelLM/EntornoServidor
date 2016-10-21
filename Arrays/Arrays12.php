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
        $deportes = ["Futbol", "baloncesto", "natacion", "tenis"];

        foreach ($deportes as $dato) {
            echo "$dato<br>";
        }
        ?>
        <p> Total de elementos del array: <?= count($deportes); ?><br></p>
        <p> primer elemento: <?= reset($deportes); ?><br>
            Siguiente elemento: <?= next($deportes); ?><br>
            Ultimo elemento: <?= end($deportes); ?><br>
            Elemento anterior: <?= prev($deportes); ?><br>
        </p>

    </body>
</html>
