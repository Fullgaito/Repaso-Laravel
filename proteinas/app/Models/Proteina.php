<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tipo;
use App\Models\Sabor;

class Proteina extends Model
{
    protected $table = 'proteinas';

    protected $fillable = ['marca', 'peso', 'precio', 'tipo_id'];

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function sabores()
    {
        return $this->belongsToMany(Sabor::class, 'proteina-sabors', 'proteina_id', 'sabor_id');
    }
}
