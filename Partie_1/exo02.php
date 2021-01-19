<?php include 'template/header.php'; ?>

<h1>EXERCICE 2</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>
<hr class="uk-divider-icon">
<p><strong>Résultat :</strong></p>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
// str_word_count() compte le nombre de mots dans une chaîne de caractères
echo "La phrase « $phrase » contient ".str_word_count($phrase)." mots"; 

include 'template/footer.html'; 