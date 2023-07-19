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
    require_once 'Luta.php';


    $l= array();
    $l[0]= new Lutador("Pretty Boy","França",1.75,30,90.9,11,2,1);
    $l[1]= new Lutador("Giovana","Brasil",1.58,17,75,100,0,1);
    $l[2]= new Lutador("Clenan","Japão", 11.75,30,50.9,11,2,1);
    $l[3]= new Lutador("Thamara","Tailândia",1.75,60,90.9,11,2,1);
    $l[4]= new Lutador("Gustavo","México",1.75,30,68.9,11,2,1);
    $l[5]= new Lutador("Padre Freitas","Itália",1.75,16,70.9,11,2,1);
    $l[6]= new Lutador("Shallon","Arábia",1.75,30,90.9,11,2,1);


    $l[0]->Status();
    $l[1]->Status();
    $l[2]->Status();
    $l[3]->Status();
    $l[4]->Status();
    $l[5]->Status();
    $l[6]->Status();

    $UEC01= new Luta();
    $UEC01->marcarLuta($l[1],$l[6]);
    $UEC01->lutar();
    $l[5]->Status();









    

   
    ?>
    </pre>
    </body>
</html>