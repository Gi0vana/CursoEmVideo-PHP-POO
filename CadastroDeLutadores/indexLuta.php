<html>
    <head>
        <meta charset="UTF-8">
        <title> </title>
    </head>
    <body>
    </body>
    <pre>
    <?php
    require_once 'Lutador.php';
    $l = new Lutador("Pretty Boy", "França", 30, 1.75, 80,11,2,1);
    $l->apresentar();
    $l->Status();
    $l->perderLuta();
    $l->Status();
    $l->ganharLuta();
    $l->Status();
    $l->empatarLuta();
    $l->Status();
    $l->getCategoria();
    echo ( $l->getCategoria());

    
    

   
    ?>
    </pre>
    </body>
</html>