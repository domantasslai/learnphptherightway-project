<?php

declare(strict_types=1);

use App\Invoice;
use App\InvoiceCollection;

require __DIR__ . '/../vendor/autoload.php';

foreach (['a', 'b', 'c', 'd', 'e'] as $key => $value) {
    echo $key . '  = ' . $value . PHP_EOL;
}

//foreach (new Invoice(25) as $key => $value) {
//    echo $key . '  = ' . $value . PHP_EOL;
//}


$invoiceCollection = new InvoiceCollection([new Invoice(15), new Invoice(25), new Invoice(35)]);

echo $invoiceCollection->count() . PHP_EOL;

foreach ($invoiceCollection as $invoice) {
    echo $invoice->id . ' - ' . $invoice->id . PHP_EOL;
}

foo($invoiceCollection);
foo([]);
foo(new \App\Collection([154]));

function foo(iterable $iterable)
{
    foreach ($iterable as $value) {

    }
}
