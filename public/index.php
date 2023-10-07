<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';


//echo '<pre>';
//print_r($_SERVER);
//echo '<pre>';

$router = new \App\Router();

$router->get('/', [\App\Classes\Home::class, 'index'])
    ->get('/invoices', [\App\Classes\Invoice::class, 'index'])
    ->get('/invoices/create', [\App\Classes\Invoice::class, 'create'])
    ->post('/invoices/create', [\App\Classes\Invoice::class, 'store']);


echo $router->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
