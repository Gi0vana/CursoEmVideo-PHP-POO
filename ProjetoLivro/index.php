<html>
    <head>
        <title> </title>
    </head>
    <body>
    <pre>
    <?php
    require_once 'pessoa.php';
    require_once 'livro.php';


    $p[0] = new pessoa("Pedro", 22, "M");
    $p[1] = new pessoa("Joao", 23, "M");
    $p[2] = new pessoa("Lucas", 24, "M");

    $l[0]= new livro("Era uma vez", "Sofia", 350,$p[0]);
    $l[0]= new livro("Era uma vez", "Sofia", 350,$p[1]);

    print_r($p);
    print_r($l);
    ?>
    </pre>
    </body>
</html>