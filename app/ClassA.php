<?php

namespace App;

class ClassA
{
    protected static string $name = 'A';

    public static function getName(): string
    {
//        var_dump(static::class);
//        var_dump(get_called_class()); // deprecated, this is the old way to determine which class was instantiate

        return static::$name;
    }

    public static function make(): static
    {
        return new static();
    }
}
