<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sabor extends Model
{
    protected $table = 'sabores';

    protected $fillable = ['nombre_sabor'];

    public function proteinas()
    {
        return $this->belongsToMany(Proteina::class, 'proteina_sabors', 'sabor_id', 'proteina_id');
    }
}
