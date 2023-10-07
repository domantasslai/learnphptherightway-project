<?php

declare(strict_types=1);

namespace App\Classes;

class Invoice
{
    public function index(): string
    {
        return 'index';
    }

    public function create(): string
    {
        return <<<HTML
            <form action="/invoices/create" method="POST">
                <label for="">Amount</label>
                <input type="text" name="amount"/>
                <button type="submit">Submit</button>
            </form>

        HTML;
    }

    public function store(): string
    {
        $amount = $_POST['amount'];
        var_dump($amount);
        return 'create invoice';
    }
}
