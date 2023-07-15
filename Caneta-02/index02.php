<html>
    <head>
        <title> Aula 2  - POO PHP </title>
        </head>
        <body> 
            <prep>
            <?php
                require_once 'Caneta02.class.php';
                $c5 = new Caneta02 ("Azul", "Bic Cristal", 0.5);
                $c4 = new Caneta02("Azul", "Bic Cristal", 0.5);
                echo ($c5-> getPonta());
                print_r($c4);
                print_r($c5);

                $c5-> getModelo();
            ?>
            </prep>
        </body>
</html>