<?php
session_start();
  $_SESSION = array(); //Eliminar toda información de sesion
  if(isset($_COOKIE[session_name()])){
  setcookie(session_name(),'',time()-1,'/');
  } 
session_destroy(); //Destruir la sesión
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
             <b>Pagina 2</b> <br>
           <?php
            echo '¡Hola ',$_SESSION['nombre'],'<br>';
            echo 'session_id() = ',  session_id(),'<br>';
            ?>
            <a href="pagina3.php">Pagina 3</a><br>
        </div>
    </body>
</html>
