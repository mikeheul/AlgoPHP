<?php include 'template/header.php'; ?>

<h1>EXERCICE 11</h1>
<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>
<hr class="uk-divider-icon">
<p><strong>Résultat :</strong></p>

<?php

$voitures = ["Peugeot","Mercedes","Renault","BMW"];
$nbVoitures = count($voitures);

var_dump($voitures);  // pensez à faire des var_dump de temps en temps pour tester vos variables et leur contenu !

echo "Il y a $nbVoitures voitures dans le tableau<br>";

// Méthode FOR
echo "<ul>";
for($i = 0; $i < $nbVoitures; $i++) {
    echo "<li>".$voitures[$i]."</li>";
}
echo "</ul>";

echo "Il y a ".count($voitures)." voitures dans le tableau<br>";

// Méthode foreach (à privilégier)
echo "<ul>";
foreach ($voitures as $marque){ //$marque = 1 élément du tableau
    echo "<li>$marque</li>"; // oui j'ai eu la flemme de faire mes <li></li> !
}
echo "</ul>";

// echo implode($voitures, "<br>");

include 'template/footer.html'; 