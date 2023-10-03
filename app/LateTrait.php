<?php

namespace App;

trait LateTrait
{
    private string $milkType = 'whole-milk';

    public static int $x = 1;

    public static string $bar;

    public function makeLatte()
    {
//        echo static::class . ' is making latte with ' . $this->milkType . PHP_EOL . '<br>';
        echo __CLASS__ . ' is making latte with ' . $this->milkType . PHP_EOL . '<br>';
    }

    public static function foo()
    {
        echo 'foo bar';
    }

    public static function bar()
    {
        echo 'bar foo';
    }

    public function setMilkType(string $milkType): static
    {
        $this->milkType = $milkType;

        return $this;
    }
}
