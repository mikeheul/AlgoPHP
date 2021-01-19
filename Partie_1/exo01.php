<?php include 'template/header.php'; ?>

<h1>EXERCICE 1</h1>
<p>Soit la phrase « Notre formation DL commence aujourd'hui ». <br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).</p>
<hr class="uk-divider-icon">
<p><strong>Résultat :</strong></p>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
// strlen() compte le nombre de caractères
$longueur = strlen($phrase); 
echo "La phrase « $phrase » contient ".strlen($phrase)." caractères<br/>";
echo "La phrase « $phrase » contient $longueur caractères";

include 'template/footer.html'; 

?>

