<?php

function texto_estado(int $valor) {
    switch ($valor) {
        case PHP_SESSION_DISABLED:
            return 'PHP_SESSION_DISABLED';
        case PHP_SESSION_NONE:
            return 'PHP_SESSION_NONE';
        case PHP_SESSION_ACTIVE:
            return 'PHP_SESSION_ACTIVE';
    }
    return'?';
}

echo 'Antes de session_star(): ',texto_estado(session_status()), '<br/>';
session_start();
echo 'Despues de session_start(): ', texto_estado(session_status()), '<br>';
session_destroy();
echo 'Después de session_destroy(): ', texto_estado(session_status()), '<br>';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
    </body>
</html>
