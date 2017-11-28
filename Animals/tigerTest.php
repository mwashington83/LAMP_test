<?php
require_once "tiger.php";
require_once "elephant.php";
require_once "friendly.php";

$tiger = new Tiger();
$tiger->name = "Fido";
echo $tiger->getName();
$tiger->makeHappySound();
$tiger->chasePrey("Antelope", 25);

$elephant = new Elephant();
$elephant->name = "Dumbo";
echo $elephant->getName();
$elephant->makeHostileSound();
$elephant->chasePrey("Peanuts", 100);

?>