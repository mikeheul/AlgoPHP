<?php 

require "class/Animal.php";
require "class/Marque.php";
require "class/Ordinateur.php";

$chien = new Animal("Chien", "Golden", 4, "2019-05-01");
$chat = new Animal("Chat", "Siamois", 4, "2018-06-08");
$lapin = new Animal("Lapin", "Nain", 4, "");
$test = new Animal();

$chat->addAliment("Poisson");
$chat->addAliment("Viande");
$chat->addAliment("Courgettes");
$chien->addAliment("Croquettes");
$lapin->addAliment("Carottes");

$chat->removeAliment("Viande");

echo $chien;
$chien->afficherAliments();
echo $chat;
$chat->afficherAliments();
echo $lapin;
$lapin->afficherAliments();
echo $test;
$test->afficherAliments();

$asus = new Marque("Asus","Corée");
$ordinateur1 = new Ordinateur($asus,"4855",16,"Intel");
$ordinateur2 = new Ordinateur($asus,"XXX899",8,"Intel");

var_dump($ordinateur1);
var_dump($ordinateur2);

echo $ordinateur1;

// L'ordinateur ASUS XXX a une mémoire vive de xx Go, avec un processeur Intel

$mesOrdinateurs = [$ordinateur1,$ordinateur2];

var_dump($mesOrdinateurs);

foreach($mesOrdinateurs as $ordi) {
    echo $ordi->getMarque()." ".$ordi->getModele()."<br/>";
}