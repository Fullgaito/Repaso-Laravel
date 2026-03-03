<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipos'; #nombre de la tabla en la base de datos

    protected $fillable = ['nombre']; #campos que se pueden llenar de forma masiva

    public function proteinas()
    {
        return $this->hasMany(Proteina::class); #relación de uno a muchos con el modelo Proteina
    }
}
