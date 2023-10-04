<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';


$invoice = new \App\Invoice();

$invoice2 = new $invoice();

$invoice3 = clone $invoice;

var_dump($invoice, $invoice2, $invoice3);
