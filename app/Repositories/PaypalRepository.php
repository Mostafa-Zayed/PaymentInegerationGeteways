<?php

namespace App\Repositories;

use App\Inerfaces\PaypalInterface;

class PaypalRepository implements PaypalInterface
{
    public function payment()
    {
        dd('paypal payment');
    }
}