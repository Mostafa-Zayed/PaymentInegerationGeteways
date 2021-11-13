<?php

namespace App\Repositories;

use App\Interfaces\ChildCategoryInterface;

class ChildCategoryRepository implements ChildCategoryInterface
{
    public function index()
    {
        dd('child category');
    }
}
