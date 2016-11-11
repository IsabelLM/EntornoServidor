<html>
    <head>
        <meta charset="UTF-8">
        <title>Cookie - Pagina 1 </title>
    </head>
    <body>
        <div>
            <?php
            if(isset($_COOKIE['nombre'])){
                echo "\$_COOKIE['nombre'] = {$_COOKIE['nombre']}<br>";
            }else{
                echo "\$_COOKIE['nombre'] = <br>";
            }
              if(isset($_COOKIE['apellido'])){
                echo "\$_COOKIE['apellido'] = {$_COOKIE['apellido']}<br>";
            }else{
                echo "\$_COOKIE['apellido'] = <br>";
            }
            
            ?>
        </div>
    </body>
</html>
