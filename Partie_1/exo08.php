<?php include 'template/header.php'; ?>

<h1>EXERCICE 8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre</p>
<hr class="uk-divider-icon">
<p><strong>Résultat :</strong></p>

<?php

$table = 8;

// Méthode FOR
echo "<h2>Avec FOR</h2>";
for ($i=1; $i <= 10; $i++) { 
    echo "$i x $table = ". $i * $table . "<br>";
}

// METHODE WHILE
echo "<h2>Avec WHILE</h2>";
$i = 1;
while ($i <= 10){
    echo "$i x $table = ". $i * $table . "<br>";
    $i++;
}

// METHODE FOREACH
foreach (range(1,10) as $nb) {
    echo "$nb x $table = ". $nb * $table . "<br>";
}

include 'template/footer.html'; 