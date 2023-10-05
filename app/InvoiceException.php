<?php

namespace App;

class InvoiceException extends \Exception
{
    public static function missingBillingInfo(string $message = null): static
    {
        return new static($message ?? 'Missing billing info');
    }

    public static function invalidAmount(string $message = null): static
    {
        return new static($message ?? 'Invalid amount');
    }
}
