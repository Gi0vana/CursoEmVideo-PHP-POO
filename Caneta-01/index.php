<html>
    <head>
        <title> Aula 2  - POO PHP </title>
        </head>
        <body> 
            <?php
                require_once 'Caneta.class.php';
                $c1 = new Caneta;
                $c1-> modelo = "Bic Cristal";
                $c1-> cor = "Azul";
                $c1-> rabiscar();

                print_r($c1);

                echo '<br>';

                var_dump($c1);

            ?>
        </body>