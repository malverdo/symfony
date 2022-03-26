<?php

namespace App\Infrastructure\Null;

use App\Entity\Cardsmile\Customer;

class NullCustomer extends Customer
{
    public function isNull(): bool
    {
        return true;
    }
}