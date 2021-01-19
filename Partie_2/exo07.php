<?php include 'template/header.php'; ?>

<h1>EXERCICE 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>
<hr class="uk-divider-icon">
<p><strong>Résultat :</strong></p>

<?php

// checked
$elements = [
    "Choix 1" => "", 
    "Choix 2" => "checked", 
    "Choix 3" => ""
];

var_dump($elements);

echo genererCheckbox($elements);

/**
 * genererCheckbox
 *
 * @param  mixed $elements
 * @return void
 */
function genererCheckbox(array $elements = ["N/A" => ""]){
    $resultat = "<form action='#'>";
    foreach ($elements as $label => $checked) {
        $resultat .= "<input class='uk-checkbox' type='checkbox' $checked> $label<br>";
    }
    $resultat .= "</form>";
    return $resultat;
}

include 'template/footer.html';