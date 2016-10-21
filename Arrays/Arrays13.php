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
        $amigos = ["Madrid" => ["Pedro", 32, "91-999-999.99"],
            "Barcelona" => ["Susana", 34, "93-030303"],
            "Toledo" => ["Sonia", 42, "925-09-09-09"]];
        $elementos= ["nombre", "edad", "telefono"];
        ?>
    </head>
    <body>
        <?php
        
        foreach ($amigos as $key => $value) {
            echo "En $key<br>";
            for ($i = 0; $i < count($value); $i++) {
                echo $elementos[$i] . " ". $value[$i]."<br>";
            }
        }
        ?>
    </body>
</html>
