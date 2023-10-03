<?php

namespace App;

trait CappuccinoTrait
{
    private function makeCappuccino()
    {
        echo static::class . ' is making cappuccino' . PHP_EOL . '<br>';
    }

//    public function makeLatte()
//    {
//        echo static::class . ' is making latte (Cappuccino Trait)' . PHP_EOL . '<br>';
//    }
}
