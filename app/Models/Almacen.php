<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
        protected $fillable = ['nombre', 'ubicacion'];

    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
