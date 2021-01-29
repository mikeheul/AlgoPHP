<?php

$tableau = [0, 12, 800, -30, 300, 15, 9, -2, 89, -40];
$max = 0;
$min = $tableau[0];

foreach ($tableau as $element) {
    $max = ($element > $max) ? $element : $max;
    $min = ($element < $min) ? $element : $min;
}

echo "La plus grande valeur est $max<br/>";
echo "La plus petite valeur est $min<br/>";