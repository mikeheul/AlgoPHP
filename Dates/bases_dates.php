<?php

// ***** DATE ET HEURE DU JOUR (FUSEAU HORAIRE EUROPE/PARIS) *****
echo "<h1>EXERCICE 1</h1>";
$date = new DateTime();
setLocale (LC_TIME, 'fr_FR','fra'); // Modifie les informations de localisation
date_timezone_set($date, timezone_open('Europe/Paris')); // Configure le fuseau horaire de l'objet DateTime
$sdate = strtotime($date->format("d-m-Y H:i")); // Transforme un texte anglais en timestamp
echo "Nous sommes le ".utf8_encode(strftime("%A %d %B %H:%M", $sdate))."<br/>"; // Convertit une chaîne ISO-8859-1 en UTF-8

// ***** DIFFERENCE DE DATES (EN ANNEES, MOIS ET JOURS) *****
echo "<h1>EXERCICE 2</h1>";
$dateNaissance = new DateTime("1985-01-17");
$interval = $dateNaissance->diff($date)->format("%Y ans %m mois et %d jours"); // Retourne la différence entre deux objets DateTime
echo "La personne née le ".$dateNaissance->format("d-m-Y")." a ".$interval."<br/>";

$dateXMas = new DateTime("2020-12-25");
$intervalXMas = $date->diff($dateXMas)->format("%a jours"); // %a = nb de jours total entre les 2 dates
echo "Il reste $intervalXMas jours avant Noël !<br/>";

// ***** AFFICHER LA DATE DE LA VEILLE + LENDEMAIN DE LA DATE DU JOUR *****
echo "<h1>EXERCICE 3</h1>";
$date->modify('-1 day');
//pour afficher la date (faire une recherche pour les différents format)
echo "La veille de la date courante est le ".utf8_encode(strftime("%A %d %B", strtotime($date->format("d-m-Y"))))."<br/>";
$date->modify('+2 day');
echo "Le lendemain de la date courante est le ".utf8_encode(strftime("%A %d %B", strtotime($date->format("d-m-Y"))))."<br/>";

?>