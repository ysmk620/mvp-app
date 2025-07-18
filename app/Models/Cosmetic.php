<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cosmetic extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'category',
        'expiration_date',
    ];
}
