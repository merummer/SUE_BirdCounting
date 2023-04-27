<?php
namespace Perasser\BirdCounting;
require 'vendor/autoload.php';
$bird1 = new Bird(4, "Meise");
$bird2 = new Bird(3,"Sperlinge");

$countingBirds = new Counting();
$countingBirds->addBird($bird1);
$countingBirds->addBird($bird2);

echo $bird1->getName();
echo $bird2->getName();
echo "Es sind " . $bird1->getAmount() + $bird2->getAmount() . " Vögel vorhanden.";

$countbird = new BirdCounter($bird1, $bird2);
echo $countbird->countBirds();
