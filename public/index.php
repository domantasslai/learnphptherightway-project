<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

//$classA = new \App\ClassA();
//$classB = new \App\ClassB();

//echo $classA->getName() . PHP_EOL;
//echo $classB->getName() . PHP_EOL;

//echo \App\ClassA::getName() . PHP_EOL;
//echo \App\ClassB::getName() . PHP_EOL;

var_dump( \App\ClassA::make()) . PHP_EOL;
var_dump( \App\ClassB::make()) . PHP_EOL;
