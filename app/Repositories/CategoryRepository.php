<?php

namespace App\Repositories;
use App\Interfaces\CategoryInterface;

class CategoryRepository implements CategoryInterface
{
    public function index()
    {
        dd('category index');
    }
}
