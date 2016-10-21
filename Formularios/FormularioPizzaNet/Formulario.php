<?php
$margarita(isset($_POST['margarita'])) ? $_POST['margarita'] : null;
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
        <title></title>
    </head>
    <body>
        <form action="Formulario.php" method="post">
            <h1>PizzaNet</h1>
            Nombre: <input type="text" name="nombre"><br>
            Direccion: <input type="text" name="dir"><br>
            Telefono: <input type="text" name="tel"><br>

            <h2>Elige tu pizza:</h2>
            <input type="checkbox" name="margarita" value="margarita">Margarita
            <?php
            if($margarita){
                ?>
            <input type="number">
            <?php
            }
            ?>
            <input type="checkbox" name="Barbacoa" value="Barbacoa">Barbacoa
            <input type="checkbox" name="4 quesos" value="4 quesos">4 quesos
            <input type="checkbox" name="4 estaciones" value="4 estaciones">4 estaciones
            <input type="checkbox" name="Carbonara" value="Carbonara">Carbonara
            <input type="checkbox" name="Romana" value="Romana">Romana
            <input type="checkbox" name="Mediterranea" value="Mediterranea">Mediterranea

            <h2>Elige tamaño:</h2>
            <input type="radio" name="pequeña" value="pequeña">Pequeña
            <input type="radio" name="mediana" value="mediana">Mediana
            <input type="radio" name="grande" value="grande">Grande

            <h2>Tipo masa:</h2>
            <input type="radio" name="fina" value="fina">Masa fina
            <input type="radio" name="normal" value="normal">Normal

            <h2>Extras</h2>
            <input type="checkbox" name="margarita" value="margarita">Queso
            <input type="checkbox" name="Barbacoa" value="Barbacoa">Pimiento
            <input type="checkbox" name="margarita" value="margarita">Cebolla
            <input type="checkbox" name="Barbacoa" value="Barbacoa">Jamon
            <input type="checkbox" name="margarita" value="margarita">Pollo


        </form>

        <?php
        // put your code here
        ?>
    </body>
</html>
