<?php

namespace App\Repositories;

use App\Interfaces\StripeInterface;

class StripeRepository implements StripeInterface
{
    public function index()
    {
        dd('stripe index');
    }
}