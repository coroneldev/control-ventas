<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
        protected $fillable = ['nombre', 'descripcion'];

    // Si querés relacionar usuarios con roles, podés agregar aquí la relación
    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }
}
