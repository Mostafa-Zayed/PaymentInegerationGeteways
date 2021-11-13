<?php

namespace App\Repositories;

use App\Interfaces\PaypalInterface;

class PaypalRepository implements PaypalInterface
{
    public function payment()
    {
        dd('paypal payment');
    }
}
