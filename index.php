<?php
require_once 'Vehicle.php';
require 'bicycle.php';
require 'Car.php';
require_once 'Truck.php';


$truck= new Truck('red', 3, 'electric', 900, 902);

echo $truck->forward();
echo ' Vitesse du  camion : ' . $truck->getCurrentSpeed() . ' km/h' . '</br>';
echo $truck->brake();
echo ' Vitesse du  camion : ' . $truck->getCurrentSpeed() . ' km/h' . '</br>';

echo $truck->loadControl();
?>