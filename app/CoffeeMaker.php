<?php

namespace App;
class CoffeeMaker
{
    public static string $foo;

    final function makeCoffee()
    {
        echo static::class . ' is making coffee' . PHP_EOL . '<br>';
    }
}
