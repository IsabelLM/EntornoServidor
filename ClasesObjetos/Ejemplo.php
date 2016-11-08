
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class ClaseSencilla {

            public $var = "un valor predeterminado";

            public function mostrarVar() {
                echo $this->var;
            }

        }

        $instancia = new ClaseSencilla();
        $asignada = $instancia;
        $referencia = & $instancia;

        $instancia->var = '$asignada tendrá este valor';

        $instancia = null; //

        var_dump($instancia);
        var_dump($referencia);
        var_dump($asignada);
        ?>
    </body>
</html>
