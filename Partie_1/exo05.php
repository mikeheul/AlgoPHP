<?php include 'template/header.php'; ?>

<h1>EXERCICE 5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. <br>
Attention, la valeur générée devra être arrondie à 2 décimales.</p>
<hr class="uk-divider-icon">
<p><strong>Résultat :</strong></p>

<?php

$valeurFrancs = 1000000;
// $valeurEuros = round($valeurFrancs / 6.55957, 2);
$valeurEuros = number_format($valeurFrancs / 6.55957, 2, ",", " ");
// number_format permet de paramétrer plus de choses à l'affichage : séparateur de milliers ainsi que le symbole de la décimale (round() reste correct cependant)

echo "<h2>Avec number_format()</h2>";
echo "Montant en francs : ". number_format($valeurFrancs, 2, ",", " ") ." francs<br> " . number_format($valeurFrancs, 2, ",", " ") ." francs = $valeurEuros €<br/>";

//ou
echo "<h2>Avec round()</h2>";
echo "Montant en francs : $valeurFrancs francs<br>$valeurFrancs francs = ". round($valeurFrancs / 6.55957, 2). " €";

include 'template/footer.html'; 