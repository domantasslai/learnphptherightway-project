<?php

namespace App;

class InvoiceCollectionIterator implements \Iterator
{
    private int $key;

    /**
     * @param Invoice[] $invoices
     */
    public function __construct(public array $invoices)
    {
    }

    public function current(): mixed
    {
        echo __METHOD__ . PHP_EOL;

        return $this->invoices[$this->key];
    }

    public function next(): void
    {
        echo __METHOD__ . PHP_EOL;

        ++$this->key;
    }

    public function key(): int
    {
        echo __METHOD__ . PHP_EOL;

        return $this->key;
    }

    public function valid(): bool
    {
        echo __METHOD__ . PHP_EOL;

        return isset($this->invoices[$this->key]);
    }

    public function rewind(): void
    {
        echo __METHOD__ . PHP_EOL;

        $this->key = 0;
    }

    public function count()
    {
        return count($this->invoices);
    }
}
