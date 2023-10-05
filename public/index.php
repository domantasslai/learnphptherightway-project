<?php

declare(strict_types=1);

use App\Invoice;

require __DIR__ . '/../vendor/autoload.php';


//var_dump(process());
function foo()
{
    echo 'foo' . PHP_EOL;

    return false;
}

function process()
{
    $invoice = new Invoice(
        new \App\Customer(['foo' => 'bar'])
    );

    try {
        $invoice->process(-25);

        return true;
    } catch (\App\Exception\MissingBillingInfoException $e) {
        echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL;

        return false;
    } catch (\InvalidArgumentException) {
        echo 'Invalid argument exception' . PHP_EOL;

        return foo();
    } finally {
        echo 'Finally block' . PHP_EOL;

        return -1;
    }
}


//set_exception_handler(function (\Throwable $e) {
//    var_dump($e->getMessage());
//});

//try {
//    echo array_rand([], 1);
//} catch (\Throwable $e) {
//    echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL;
//}

$invoice = new Invoice(new \App\Customer());

$invoice->process(-25);
