<?php

// // Les aventuriers de la fonction perdue

// // Version avec texte
// // $params1 = 'La lune';
// // $params2 = 'Raton le raton';

// // Version sans texte
// $params1 = '';
// $params2 = '';

// function writeSecretSentence(string $params1, string $params2): string
// {
//     return $params1 . " s'incline face à " . $params2;
// }

// echo writeSecretSentence($params1, $params2);

// Quête -> Ma première classe

require 'Bicycle.php';
$bike = new Bicycle('blue');
$bike->color = 'blue';
$bike->currentSpeed = 0;

echo $bike->forward();
echo '<br> Speed of the bicycle : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Speed of the bicycle : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle('blue');
$rockrider->color = 'yellow';

$tornado = new Bicycle('blue');
$tornado->color = 'black';

$tornado->forward();

// Challenge -> Ma première classe

require 'SimpsonsCar.php';
$car = new SimpsonsCar('yellow', 4, 'gasoline');
$car->currentSpeed = 0;

echo $car->forward();
echo '<br> Speed of the car : ' . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Speed of the car : ' . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake();

$homePinkSedan = new SimpsonsCar('yellow', 4, 'gasoline');
$homePinkSedan->color = 'pink';
$homePinkSedan->nbSeats = 2;
$homePinkSedan->energy = 'SP98';

$margeStationWagon = new SimpsonsCar('yellow', 4, 'gasoline');
$margeStationWagon->color = 'red';
$margeStationWagon->nbSeats = 6;
$margeStationWagon->energy = 'SP95-E10';

$tornado->forward();
