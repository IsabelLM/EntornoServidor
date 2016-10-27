<?php
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : null;
$pizza = (isset($_POST['pizza'])) ? $_POST['pizza'] : null;
$enviado = (isset($_POST['aceptar'])) ? true : false;
$masa = (isset($_POST['masa'])) ? $_POST['masa'] : null;
$cantidadPizza = (isset($_POST['cantidadPizza'])) ? $_POST['cantidadPizza'] : null;
$tamano = (isset($_POST['tamano'])) ? $_POST['tamano'] : null;


if (empty($usuario['nombre']) || empty($usuario['dir'] || empty($usuario['tel']))) {
    $correctoDatos = false;
} else {
    $correctoDatos = true;
}

if ($enviado) {
    if ($tamano == 'pequeña') {
        $precioTamano = 1;
    } else if ($tamano == 'mediana') {
        $precioTamano = 2;
    } else if ($tamano == 'grande') {
        $precioTamano = 3;
    }
}

if ($enviado) {
    if ($masa == 'fina') {
        $precioMasa = 1;
    } else if ($masa == 'normal') {
        $precioMasa = 2;
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PizzaNet</title>

    </head>
    <body>
        <?php
        if ($correctoDatos && $enviado) {
            ?>
            Tu pedido es: 
            <?php
        } else {
            ?>

        <center> <h1>PizzaNet</h1></center>
        <form action = "Formulario.php" method = "post">
            <fieldset>
                <legend>Datos Personales</legend>
                <!--DATOS USUARIO-->

                *Nombre: <input type = "text" name = "usuario[nombre]" value = "<?= $usuario['nombre'] ?>">
                <?php
                if ($enviado && empty($usuario['nombre'])) {
                    echo "Es un campo obligatorio";
                }
                ?><br>
                *Direccion: <input type="text" name="usuario[dir]" value="<?= $usuario['dir'] ?>">
                <?php
                if ($enviado && empty($usuario['dir'])) {
                    echo "Es un campo obligatorio";
                }
                ?><br>
                *Telefono: <input type="text" name="usuario[tel]" value="<?= $usuario['tel'] ?>">
                <?php
                if ($enviado && empty($usuario['tel'])) {
                    echo "Es un campo obligatorio";
                }
                ?><br>
            </fieldset>
            <!--TIPO PIZZA-->
            <fieldset>
                <legend>Pedido</legend>

                <h2>Elige tu pizza:</h2>

                <select name="pizza" >
                    <option  name="pizza[margarita]" value="<?= $pizza['margarita'] ?>">Queso</option>
                    <option name="pizza[barbacoa]" value="<?= $pizza['barbacoa'] ?>">Pimiento</option>
                    <option name="pizza[c4quesos]"value="<?= $pizza['c4quesos'] ?>">Cebolla</option>
                    <option value= name="pizza[c4estaciones]" value="<?= $pizza['c4estaciones'] ?>">Jamon</option>
                    <option name="pizza[carbonara]" value="<?= $pizza['carbonara'] ?>">Pollo</option>
                    <option name="pizza[romana]" value="<?= $pizza['romana'] ?>">Jamon</option>
                    <option name="pizza[mediterranea]" value="<?= $pizza['mediterranea'] ?>">Pollo</option>
                </select>
                <input type="number" name="cantidadPizza" placeholder="Cantidad">

                <?php
                if ($enviado && !$cantidadPizza) {
                    echo "Tienes que pedir minimo una pizza";
                }
                ?>

                <!--TAMAÑO-->

                <h2>Elige tamaño:</h2>
                <input type="radio" name="tamano" value="pequeña">Pequeña
                <input type="radio" name="tamano" value="mediana">Mediana
                <input type="radio" name="tamano" value="grande">Grande

                <!--TIPO MASA-->

                <h2>Tipo masa:</h2>
                <input type="radio" name="masa" id="masa" value="fina">Masa fina
                <input type="radio" name="masa" id="masa" value="normal">Normal

                <!--EXTRAS-->

                <h2>Extras</h2>

                
                <select name="extras" size="5" multiple="true">
                    <option value="Queso" name="extras['queso']">Queso</option>
                    <option value="Pimiento"name="extras['pimiento']">Pimiento</option>
                    <option value="Cebolla"name="extras['cebolla']">Cebolla</option>
                    <option value="Jamon"name="extras['jamon']">Jamon</option>
                    <option value="Pollo"name="extras['pollo']">Pollo</option>
                </select><br><br>

                <input type="submit" name="aceptar" value="Enviar pedido">
            </fieldset>

        </form>
    <?php } ?>

</body>
</html>
