<?php
$margarit
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>PizzaNet</title>
    </head>
    <body>
        <form action="Formulario.php" method="post">
            <h1>PizzaNet</h1>
            Nombre: <input type="text" name="nombre"><br>
            Direccion: <input type="text" name="dir"><br>
            Telefono: <input type="text" name="tel"><br>

            <h2>Elige tu pizza:</h2>
            Margarita <input type="number" name="cMargarita" id="cMargarita"> <br> 
            Barbacoa <input type="number" name="cBarbacoa" id="cBarbacoa"> <br> 
            4 quesos <input type="number" name="c4quesos" id="c4quesos"> <br> 
            4 estaciones <input type="number"> <br> 
            Carbonara <input type="number"> <br> 
            Romana <input type="number"> <br> 
            Mediterranea <input type="number"> <br> 

            <h2>Elige tamaño:</h2>
            <input type="radio" name="pequeña" value="pequeña">Pequeña
            <input type="radio" name="mediana" value="mediana">Mediana
            <input type="radio" name="grande" value="grande">Grande

            <h2>Tipo masa:</h2>
            <input type="radio" name="fina" value="fina">Masa fina
            <input type="radio" name="normal" value="normal">Normal

            <h2>Extras</h2>
            <input type="checkbox" name="margarita" value="margarita">Queso
            <input type="number"> <br> 
            <input type="checkbox" name="Barbacoa" value="Barbacoa">Pimiento
            <input type="number"> <br> 
            <input type="checkbox" name="margarita" value="margarita">Cebolla
            <input type="number"> <br> 
            <input type="checkbox" name="Barbacoa" value="Barbacoa">Jamon
            <input type="number"> <br> 
            <input type="checkbox" name="margarita" value="margarita">Pollo
            <input type="number"> <br> 


        </form>

        <?php
        ?>
    </body>
</html>
