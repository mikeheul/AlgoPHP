<?php include 'template/header.php'; ?>

<h1>EXERCICE 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>
<hr class="uk-divider-icon">
<p><strong>Résultat :</strong></p>

<?php

// $date1 et $date2 sont des instances de la classe DateTime (objets)
$date1 = new DateTime('1985-01-17'); 
$date2 = new DateTime(); //date du jour
$interval = $date1->diff($date2);
var_dump($interval);
echo "La personne née le ".$date1->format('d/m/Y'). " a ".$interval->format('%y ans %m mois et %d jours<br/>');
echo $interval->y." ans";

?>

<hr class="uk-divider-icon">

<?php

// Ajout d'un nombre de jours à une date
$dateDebut = new DateTime(); // date du jour
$nbJours = 14; // nb de jours
echo "Date de début : ".$dateDebut->format("d-m-Y")."<br/>";
$dateFin = date_add($dateDebut, DateInterval::createFromDateString("$nbJours days")); 
echo "Intervalle : $nbJours jours<br/>";
echo "Date de fin : ".$dateFin->format("d-m-Y");

include 'template/footer.html'; 