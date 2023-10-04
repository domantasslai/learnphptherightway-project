<?php

declare(strict_types=1);

use App\Invoice;

require __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice(25, 'Invoice 1', '123456789');

//echo serialize(true) . PHP_EOL;
//echo serialize(1) . PHP_EOL;
//echo serialize(2.5) . PHP_EOL;
//echo serialize('Hello world') . PHP_EOL;
//echo serialize([1, 2, 3]) . PHP_EOL;
//var_dump(unserialize(serialize(['a' => 1, 'b' => 2]))) . PHP_EOL;

//echo serialize($invoice) . PHP_EOL;

//$str = serialize($invoice);
//$invoice2 = unserialize($str);
//var_dump($invoice, $invoice2, $invoice === $invoice2);

//var_dump(unserialize('O:11:"App\Invoice":1:{s:2:"id";s:21:"invoice_651da74319e7f";}'));

$str = serialize($invoice);
echo $str . PHP_EOL;
var_dump(unserialize($str));
