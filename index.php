<?php

// Les aventuriers de la fonction perdue

// Version avec texte
// $params1 = 'La lune';
// $params2 = 'Raton le raton';

// Version sans texte
$params1 = '';
$params2 = '';

function writeSecretSentence(string $params1, string $params2): string
{
    return $params1 . " s'incline face à " . $params2;
}

echo writeSecretSentence($params1, $params2);
