<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$coffeeMaker = new \App\CoffeeMaker();
$coffeeMaker->makeCoffee();


$lateMaker = new \App\LatteMaker();
$lateMaker->makeCoffee();
$lateMaker->makeLatte();

$cappuccinoMaker = new \App\CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappuccino();

$allInOnCoffeeMaker = new \App\AllInOneMaker();
$allInOnCoffeeMaker->makeCoffee();
$allInOnCoffeeMaker->makeLatte();
//$allInOnCoffeeMaker->makeOriginalLatte();
$allInOnCoffeeMaker->makeCappuccino();


//\App\LatteMaker::foo();
//echo "<br>";
//echo \App\LatteMaker::$x;

//\App\CoffeeMaker::$foo = 'foo';
//\App\LatteMaker::$foo = 'bar';
//
//echo App\CoffeeMaker::$foo . ' ' . App\LatteMaker::$foo;
//echo "<br>";
//\App\AllInOneMaker::$bar = 'foo';
//\App\LatteMaker::$bar = 'bar';
//
//echo App\LatteMaker::$bar . ' ' . App\AllInOneMaker::$bar;
