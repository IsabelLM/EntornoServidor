<?php
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : null;
$pizza = (isset($_POST['pizza'])) ? $_POST['pizza'] : null;
$enviado = (isset($_POST['aceptar'])) ? true : false;
$masa=(isset($_POST['masa'])) ? $_POST['masa'] : null;

if (empty($usuario['nombre']) || empty($usuario['dir'] || empty($usuario['tel']))) {
    $correcto = false;
} else {
    $correcto = true;
}

if (empty($pizza['margarita']) && empty($pizza['barbacoa']) && empty($pizza['c4quesos']) && empty($pizza['c4estaciones']) &&
                empty($pizza['carbonara']) && empty($pizza['romana']) && empty($pizza['mediterranea'])) {
    $estaVacio = true;
} else {
    $estaVacio = false;
}
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
            <!--DATOS USUARIO-->
            <h1>PizzaNet</h1>
            Nombre: <input type="text" name="usuario[nombre]" value="<?= $usuario['nombre'] ?>">
            <?php
            if ($enviado && empty($usuario['nombre'])) {
                echo "Es un campo obligatorio";
            }
            ?><br>
            Direccion: <input type="text" name="usuario[dir]" value="<?= $usuario['dir'] ?>">
            <?php
            if ($enviado && empty($usuario['dir'])) {
                echo "Es un campo obligatorio";
            }
            ?><br>
            Telefono: <input type="text" name="usuario[tel]" value="<?= $usuario['tel'] ?>">
            <?php
            if ($enviado && empty($usuario['tel'])) {
                echo "Es un campo obligatorio";
            }
            ?><br>
            
            <!--TIPO PIZZA-->

            <h2>Elige tu pizza:</h2>
            Margarita <input type="number" name="pizza[margarita]" value="<?= $pizza['margarita'] ?>"> <br> 
            Barbacoa <input type="number" name="pizza[barbacoa]" value="<?= $pizza['barbacoa'] ?>"> <br> 
            4 quesos <input type="number" name="pizza[c4quesos]"value="<?= $pizza['c4quesos'] ?>"> <br> 
            4 estaciones <input type="number" name="pizza[c4estaciones]"value="<?= $pizza['c4estaciones'] ?>" > <br> 
            Carbonara <input type="number"name="pizza[carbonara]"value="<?= $pizza['carbonara'] ?>"> <br> 
            Romana <input type="number"name="pizza[romana]"value="<?= $pizza['romana'] ?>"> <br> 
            Mediterranea <input type="number"name="pizza[mediterranea]"value="<?= $pizza['mediterranea'] ?>"> <br> 

            <?php
            if ($enviado && $estaVacio) {
                echo "Tienes que pedir minimo una pizza";
            }
            ?>
            
            <!--TAMAÑO-->
            
            <h2>Elige tamaño:</h2>
            <input type="radio" name="pequeña" value="pequeña">Pequeña
            <input type="radio" name="mediana" value="mediana">Mediana
            <input type="radio" name="grande" value="grande">Grande
        
            <!--TIPO MASA-->

            <h2>Tipo masa:</h2>
            <input type="radio" name="masa" value="fina">Masa fina
            <input type="radio" name="masa" value="normal">Normal
         
            <!--EXTRAS-->

            <h2>Extras</h2>
            Queso <input type="number" name="extraQueso"> <br> 
            Pimiento <input type="number"name="extraPimiento"> <br> 
            Cebolla <input type="number"name="extraCebolla"> <br> 
            Jamon <input type="number"name="extraJamon"> <br> 
            Pollo <input type="number"name="extraPollo"> <br> <br>
            <input type="submit" name="aceptar" value="Enviar pedido">


        </form>

        <?php
            
        ?>
    </body>
</html>
