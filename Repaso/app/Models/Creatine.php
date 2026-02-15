<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creatine extends Model
{
    protected $table = 'creatine';

    protected $fillable = [
        'name',
        'price',
        'type',
        'grams',
        'description',
    ];
}
