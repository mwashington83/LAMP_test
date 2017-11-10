<?php
require_once "dog.php";
require_once "houndDog.php";
require_once "trainableDog.php";
require_once "iTrainable.php";
require_once "snowDog.php";
require_once "husky.php";
require_once "stBernard.php";

$hotdog = new TrainableDog();
$hotdog->learnTrick("Shake");
$hotdog->doTrick("Shake");
$hotdog->getReward("Scooby Snack");

$dog = new Husky();
$dog->eat(5);
$dog2 = new StBernard();
$dog2->eat(10);

// class TrainableDog extends Dog implements ITrainable {
//     public function connect();
//     public function learnTrick($trick);
//     public function doTrick($trick);
//     public function getReward($snack);
//     public function disconnect();







?>