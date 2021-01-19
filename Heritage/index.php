<?php

include 'Voiture.php';
include 'VoitureElec.php';

$v1 = new Voiture("Peugeot","408",5);
$v2 = new VoitureElec("BMW","i3", 5, 100);

echo $v1->getMarque();
echo $v2->getAutonomie();