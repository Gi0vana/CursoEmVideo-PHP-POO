<html>
    <head>
        <title> Aula 2  - POO PHP </title>
        </head>
        <body> 
            <?php
                require_once 'Caneta.class.php';
                $c1 = new Caneta;
                $c1-> cor = "Azul";
                $c1-> ponta = 0.5;
                $c1-> tampada = false;
                $c1->tampar();
                $c1->rabiscar();

                $c2 = new Caneta;
                $c2-> cor = "Rosa";
                $c2-> ponta = 0.7;
                $c2-> tampada = true;
                $c2->destampar();
                $c2->rabiscar();
              
                print_r($c1);
                echo "<br>";
                print_r($c2);

            ?>
        </body>