<html>
    <head>
        <meta charset="UTF-8">
        <title> </title>
    </head>
    <body>
    </body>
    <pre>
    <?php
    require_once 'Banco.php';

    $p1 = new Banco();
    $p2 = new Banco();
   // $p1->abrirConta("CC");
  //  $p1->setDono("Giovana");
   // $p2->abrirConta("CP");
   // $p2->setDono("Rosimeire");
    
    $p1->sacar(4);
    $p1->fecharConta();


    print_r($p1);
    echo "<br>";
    print_r($p2);


    ?>
    </pre>
    </body>
</html>