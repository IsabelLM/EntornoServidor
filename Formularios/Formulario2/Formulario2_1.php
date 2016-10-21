<?php
	$datosCilindro=(isset($_POST['datosCilindro']))? $_POST['datosCilindro']: null;
	$diametro=(isset($datosCilindro['diametro']))? $datosCilindro['diametro']: '';
	$altura=(isset($datosCilindro['altura']))? $datosCilindro['altura']: '';
    $enviado=(isset($_POST['aceptar']))? true:false;
    if(empty($altura) || empty($diametro)){
        $correcto=false;
    }else{
        $correcto=true;
    }
?>
<!DOCTYPE html>
    <html>

    <head>
        <title>Ejercicio2: Altura y Diámetro cilindro.</title>
    </head>

    <body>
        <?php
            if($enviado && $correcto){
        ?>
        <p>Volumen del cilindro de radio <?= $diametro?> y altura <?= $altura?></p>
        <?= pow($diametro/2,2)* $altura ?>
        <br>
        <?php echo var_dump($diametro)."<br>\n".var_dump($altura);
        }else{
               
        ?>
        <!--En action en lugar del mismo nombre del archivo podemos poner una superglobal que se llama lt&?$_SERVER['PHP_SELF']?>-->
        <form name="frm1" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <p>Altura del circulo:
            <input type="text" name="datosCilindro[altura]" value="<?= $altura?>" maxlength="20">
        <?php if($enviado && empty($altura))
            echo "Es un campo obligatorio.";
        ?>
        <br> Diametro del circulo:
        <input type="text" name="datosCilindro[diametro]" value="<?= $diametro?>" maxlength="20">
        
        <?php if($enviado && empty($diametro))
            echo "Es un campo obligatorio.";
        ?>
       <br></p>
      <input type="submit" name="aceptar" value="ok"> </form>
      <?php }?>
    </body>

</html>