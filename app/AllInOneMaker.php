<?php

namespace App;
class AllInOneMaker extends CoffeeMaker
//    implements MakesCappuccino, MakesLatte
{
//    use CappuccinoTrait {
//        CappuccinoTrait::makeLatte insteadof LateTrait;
//    }
//    use LateTrait {
//        LateTrait::makeLatte as makeOriginalLatte;
//    }
    use CappuccinoTrait {
        CappuccinoTrait::makeCappuccino as public;
    }
    use LateTrait;

//    public function makeCappuccino()
//    {
//        echo static::class . ' is making cappuccino' . PHP_EOL . '<br>';
//    }
//
//    public function makeLatte()
//    {
//        echo static::class . ' is making latte' . PHP_EOL . '<br>';
//    }
}
