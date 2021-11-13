<?php

namespace App\Repositories;

use App\Interfaces\GetewayInterface;

class GetewayRepository implements GetewayInterface
{
    // for testing now 
    public function index()
    {
        dd('crruncy index ');
    }
}
