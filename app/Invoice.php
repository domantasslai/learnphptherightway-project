<?php

namespace App;

class Invoice
{
    /** @var string|int */
    public string|int $id;

    public function __construct(public float $amount)
    {
        $this->id = random_int(1000, 99999);
    }
}
