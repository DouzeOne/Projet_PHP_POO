<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../src/avion.php';
require __DIR__ . '/../src/bateau.php';
require __DIR__ . '/../src/moto.php';
require __DIR__ . '/../src/train.php';
require __DIR__ . '/../src/voiture.php';



use App\Avion;
use App\Bateau;
use App\Moto;
use App\Train;
use App\Voiture;

$t1 = new Avion();
$t1->vol();

$t2 = new Bateau();
$t2->vogue();

$t3 = new Voiture();
$t3->roule();
$t3->freiner();
$t3->accelerer();

$t4 = new Moto();
$t4->roule();
$t4->freiner();
$t4->accelerer();

$t5 = new Train();
$t5->roule();
$t5->freiner();
$t5->accelerer();

