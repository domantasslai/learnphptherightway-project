<?php

namespace App;

use App\Exception\MissingBillingInfoException;

class Invoice
{
    public function __construct(
        public Customer $customer,
    )
    {
    }


    public function process(float $amount): void
    {
        if ($amount <= 0) {
//            throw new \InvalidArgumentException('Invalid invoice amount');
            throw InvoiceException::invalidAmount('Invalid invoice amount');
        }

        if (empty($this->customer->getBillingInfo())) {
//            throw new MissingBillingInfoException();
            throw InvoiceException::missingBillingInfo();
        }

        echo 'Processing $' . $amount . ' invoice -';

        sleep(1);

        echo 'OK' . PHP_EOL;
    }
}
