<?php
require 'bicycle.php';
require 'Car.php';
$bike =new bicycle();

$bike->setColor = 'blue';
$bike-> setCurrentSpeed(0);

echo $bike->forward();
echo  'Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'Km/h';
echo $bike->brake();
echo 'Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'Km/h' ;
echo $bike->brake();

$car= new Car('red', 4, 'diesel');

echo $car->start();
echo '<br> Vitesse de la voiture: ' . $car->getCurrentSpeed() . 'Km/h' . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';


?>