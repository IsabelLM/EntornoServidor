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
        
        $altura = $_POST['altura'];
        $diametro = $_POST['diametro'];

        $radio = $diametro / 2;
        
        $resultado = M_PI * ($radio * $radio) * $altura;
        echo "El volumen del cilindro es: " . $resultado . "<br>";
        
        /*Forma rara profesor.
         * <?=pow($diametro/2,2)*$altura?><br>
           <?= var_dump($diametro).<br>.var_dump($altura)?>
         *          */
        ?>
    </body>
</html>
