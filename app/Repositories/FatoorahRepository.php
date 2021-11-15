<?php

namespace App\Repositories;

use App\Interfaces\FatoorahInterface;

class FatoorahRepository implements FatoorahInterface
{
    public function index()
    {
        dd('fatoorah index');
    }
}