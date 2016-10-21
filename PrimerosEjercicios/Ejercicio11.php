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
        
            <?php /*Utilizar variables que quieras que se expandan heredoc, si no, nowdoc*/
        $divisores = [];
        ?>
    </head>
    <body>
        <?php
        $suma = 5000;
        for ($i = 1; $i <= $suma; $i++) {

            if ($suma % $i == 0) {
                $divisores[] = $i;
            }
        }

        echo '<pre>';
        print_r($divisores);
        echo '</pre>';
        ?>
    </body>