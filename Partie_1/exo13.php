<?php include 'template/header.php'; ?>

<h1>EXERCICE 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>
<hr class="uk-divider-icon">
<p><strong>Résultat :</strong></p>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);

var_dump($notes);

// arrondir à 2 décimales la somme des notes divisée par le nombre de notes
$moyenne = round(array_sum($notes) / $nbNotes, 2);
// ou number_format

// implode affiche le contenu du tableau avec le séparateur spécifié en 1er argument snas devoir nécessairement passer par une boucle
echo "Les notes obtenues sont : " . implode(", ",$notes);
echo "<br>La moyenne est de : $moyenne<br/>";

// var_dump(array_values($notes));

include 'template/footer.html'; 