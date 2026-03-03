<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Proteina;
use App\Models\Sabor;

class Proteina_sabor extends Model
{
    protected $table = 'proteina-sabors';

    protected $fillable = ['proteina_id', 'sabor_id'];
}
