<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $with = ['translations'];

    protected $fillable = ['key','value','is_trnsatable'];

    protected $casting = ['is_transatable'];
}
