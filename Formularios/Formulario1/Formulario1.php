<?php
$numero1 = (isset($_POST['numero1'])) ? $_POST['numero1'] : null;
$numero2 = (isset($_POST['numero2'])) ? $_POST['numero2'] : null;
$enviado = (isset($_POST['aceptar'])) ? true : false;
if (empty($numero1) || empty($numero2)) {
    $correcto = false;
} else {
    $correcto = true;
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
        <title>Formulario 1</title>
    </head>
    <body>
        <?php
        if ($enviado && $correcto) {
            ?>
            Suma: <?= $numero1 + $numero2 ?> <br>
            Resta: <?= $numero1 - $numero2 ?><br>
            Multiplicación: <?= $numero1 * $numero2 ?><br>
            División: <?= $numero1 / $numero2 ?><br>
            Resto: <?= $numero1 % $numero2 ?><br>
            <?php
        } else {
            ?>            
            <form action="<?= $_SERVER['PHP_SELF'] ?>"  method="post">
                Numero1: <input type="number" name="numero1">
                <?php
                if ($enviado && empty($numero1)) {
                    echo"Es un campo obligatorio";
                }
                ?><br>
                Numero2: <input type="number" name="numero2">

                <?php
                if ($enviado && empty($numero2)) {
                    echo"Es un campo obligatorio";
                }
                ?><br>
                <input type="submit" value="Enviar" name="aceptar">
            </form>
            <?php
        }
        ?>



    </body>
</html>

