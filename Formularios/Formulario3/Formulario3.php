<?php
$tienda1 = (isset($_POST['tienda1'])) ? $_POST['tienda1'] : null;
$tienda2 = (isset($_POST['tienda2'])) ? $_POST['tienda2'] : null;
$tienda3 = (isset($_POST['tienda3'])) ? $_POST['tienda3'] : null;
$enviado = (isset($_POST['enviar'])) ? true : false;
if (empty($tienda1) || empty($tienda2) || empty($tienda3)) {
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
        <title></title>
    </head>
    <body>
        <?php
        if ($enviado && $correcto) {
            ?>
            La media es: <?= ($tienda1 + $tienda2 + $tienda3) / 3 ?>
            <?php
        } else {
            ?>
            <form action="Formulario3.php" method="post">
                Precio tienda 1 <input type="number" name="tienda1">
                <?php
                if ($enviado && empty($tienda1)) {
                    echo"Es un campo obligatorio";
                }
                ?><br>
                Precio tienda 2 <input type="number" name="tienda2">
                <?php
                if ($enviado && empty($tienda2)) {
                    echo"Es un campo obligatorio";
                }
                ?><br>
                Precio tienda 3 <input type="number" name="tienda3">
                <?php
                if ($enviado && empty($tienda3)) {
                    echo"Es un campo obligatorio";
                }
                ?><br>

                <input type="submit" value="Calcular media" name="enviar">


            </form>   
            <?php
           
        }
        ?>
    </body>
</html>
