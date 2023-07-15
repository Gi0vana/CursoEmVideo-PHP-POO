<html>
    <head>
        <title> Aula 2  - POO PHP </title>
        </head>
        <body> 
            <prep>
                <h1>Projeto Controle Remoto</h1>
            <?php
                require_once 'ControleRemoto.php';
                $c = new ControleRemoto();
                $c->ligar();
                $c->fecharMenu();
                $c->maisVolume();
                $c->abrirMenu();
                $c->menosVolume();
                $c->abrirMenu();
                $c->ligarMudo();
                $c->ligarMudo();
                $c->desligarMudo();
                $c->desligarMudo();
                $c->play();
                $c->play();
                $c->desligar();
                echo "<br>";
                print_r($c);

            ?>
            </prep>
        </body>
</html>