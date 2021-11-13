<?php

namespace App\Repositories;

use App\Interfaces\CurrencyInerface;

class CurrencyRepository implements CurrencyInerface
{
    // for testing now
    public function index()
    {
        dd('crruncy index ');
    }
}
