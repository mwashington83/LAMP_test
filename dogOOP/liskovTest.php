<?php


require_once "serviceDog.php";
require_once "houndDog.php";
require_once "cat.php";

$pet = new Pet();
$pet->setName("Fido");
echo$pet->getname() . "<br .>";

$pet = new serviceDog();
$pet->setName("Fido");
echo$pet->getname() . "<br .>";

$pet = new houndDog();
$pet->setName("Fido");
echo$pet->getname() . "<br .>";

$pet = new Dog();
$pet->setName("Fido");
echo$pet->getname() . "<br .>";

$pet = new Cat();
$pet->setName("Fido");
echo$pet->getname() . "<br .>";
?>