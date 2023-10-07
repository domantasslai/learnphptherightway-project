<?php

namespace App;

use Traversable;

class InvoiceCollection extends Collection
{
    /**
     * @param Invoice[] $invoices
     */
    public function __construct(public array $invoices)
    {
        parent::__construct($this->invoices);
    }


    public function count()
    {
        return count($this->invoices);
    }
}
