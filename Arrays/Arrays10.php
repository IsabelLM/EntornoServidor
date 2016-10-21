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
        <?php
        $num=[5=>1, 12=>2, 13=>56, "x"=>42];
        ?>

    </head>
    <body>
        <?php
        foreach ($num as $key => $value) {
            echo "Indice $key, valor $value<br>\n";
        }
        echo "Numero de elementos del vector:" . count($num) . "<br>";
        
        unset($num[5]);
        foreach ($num as $key => $value) {
            echo "Indice $key, valor $value<br>\n";
        }
        unset($num);
        echo  isset($num);
        ?>
    </body>
</html>
