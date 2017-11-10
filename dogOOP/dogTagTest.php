<?php

require_once "serviceDog.php";
require_once "houndDog.php";
require_once "cat.php";

$serviceDog = new ServiceDog();
$serviceDog->setName('Wilbur');

$tag = new NameTag();
$tag->setText('Wilbur'.' If found call 678-GET-HELP');

$serviceDog->setNameTag($tag);

echo $serviceDog->getnameTag();
echo "$<br />" . $serviceDog->getBreed();

$houndDog = new HoundDog();
$houndDog->setName("Rover");

$tag2 = new NameTag();
$tag2->setText(' Rover'.' If found call 678-GET-HELP');

$houndDog->setNameTag($tag2);

echo $houndDog->getnameTag();
echo " <br />" . $houndDog->getBreed();



$houndDog->Track();
$houndDog->fetch();
$houndDog->sayHello();
echo "<br />";
$houndDog->retrieverSayHello();
echo "<br />";
$houndDog->protectedWoof();
echo "<br />";
$houndDog->fetchDuck();

MammalType::getType();
echo "<br />";
Dog::getType();






?>