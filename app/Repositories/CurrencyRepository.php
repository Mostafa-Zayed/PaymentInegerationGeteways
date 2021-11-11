<?php

namespace App\Repositories;

use App\Inerfaces\CurrencyInerface;

class CurrencyRepository implements CurrencyInerface
{
    // for testing now 
    public function index()
    {
        dd('crruncy index ');
    }
}
