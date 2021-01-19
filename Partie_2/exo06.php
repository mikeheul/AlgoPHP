<?php include 'template/header.php'; ?>

<h1>EXERCICE 6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>
<hr class="uk-divider-icon">
<p><strong>Résultat :</strong></p>

<?php

$elements = ["Monsieur","Madame","Mademoiselle"];
var_dump($elements);

echo alimenterListeDeroulante($elements);

/**
 * alimenterListeDeroulante
 * @param  mixed $elements
 * @return void
 */
function alimenterListeDeroulante(array $elements = ["N/A"]){
    $resultat = "<form action='#'>
        <select class='uk-select' name='civilite'>";
        foreach($elements as $option){
            $resultat .= "<option value='$option'>$option</option>";
        }
    $resultat .= "</select></form>";
    return $resultat;
}

include 'template/footer.html';