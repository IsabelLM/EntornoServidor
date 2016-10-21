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
        $estadiosFutbol = array("Barcelona" => "Camp Nou",
            "Real Madrid" => "Santiago Bernabeu",
            "Valencia" => "Mestalla",
            "Real Sociedad" => "Anoeta");


        foreach ($estadiosFutbol as $key => $value) {
        echo "<table border = '1'> \n"; 
        echo "<tr><td>$key</td><td>$value</td></tr> \n"; 
        }
        
        ?>

    </body>
</html>
