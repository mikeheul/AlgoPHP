<?php include 'template/header.php'; ?>

<h1>EXERCICE 3</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>
<hr class="uk-divider-icon">
<p><strong>Résultat :</strong></p>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
echo $phrase."<br>";
echo str_replace("aujourd'hui", "demain", $phrase);

include 'template/footer.html'; 