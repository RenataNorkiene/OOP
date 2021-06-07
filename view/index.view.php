<?php
 use DemoApp\TransportoPriemone;
 use DemoApp\Automobilis;
 use DemoApp\Motociklas;
 use DemoApp\Dviratis;
 ?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Demo OOP</title>
    </head>
    <body>
    <h1>Transporto priemones</h1>
    <?php
    $volvo = new TransportoPriemone("XC70", "Volvo");
    $volvo->setKaina(30000);
    $volvo->setSvoris(300);
    $volvo->setVariklis(true);
    $volvo->setGalia(678);
    $volvo->setMaxGreitis(200);
    $volvo->setAprasymas("Patikimas, saugus automobilis tinkamas seimai");
    $volvo->setVietuSkaicius(4);
    ?>
    <ul>
        <?php foreach ($volvo->showInfo() as $volvo):?>
        <li><?=$volvo;?></li>
        <?php endforeach;?>
    </ul>
    <?php
    $bmw = new Automobilis("GrandTourismo", "BMW", 350);
    $harley = new Motociklas("Brakeout", "Harley Davitson", 2);
    $canion = new Dviratis("MTB", "Canion", true);

    var_dump($bmw->getTuris());
    var_dump($harley->getRatuSkaicius());
    var_dump($canion->getLeidimas());
    ?>
    </body>
</html>