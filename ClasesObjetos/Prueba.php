<?php
//namespace NS;
//
//class NombreClase {
//    
//}
//
//echo NombreClase::class;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class Foo {

            public static $mi_static = 'foo';

            public function valorStatic() {
                return self::$mi_static;
            }

        }

        class Bar extends Foo {

            public function fooStatic() {
                return parent::$mi_static;
            }

        }

        print Foo::$mi_static . "\n";

        $foo = new Foo();
        print $foo->valorStatic() . "\n";
        //print $foo->mi_static . "\n";      // "Propiedad" mi_static no definida

        print $foo::$mi_static . "\n";
        $nombreClase = 'Foo';
        print $nombreClase::$mi_static . "\n"; // A partir de PHP 5.3.0

        print Bar::$mi_static . "\n";
        $bar = new Bar();
        print $bar->fooStatic() . "\n";

//        class Prueba {
//
//            static public function getNew() {
//                return new static;
//            }
//
//        }
//
//        class Hija extends Prueba {
//            
//        }
//
//        $obj1 = new Prueba();
//        $obj2 = new $obj1;
//        var_dump($obj1 !== $obj2);
//
//        $obj3 = Prueba::getNew();
//        var_dump($obj3 instanceof Prueba);
//
//        $obj4 = Hija::getNew();
//        var_dump($obj4 instanceof Hija);
        ?>
    </body>
</html>
