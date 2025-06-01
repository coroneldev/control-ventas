<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
        protected $fillable = [
        'nombre', 'descripcion', 'categoria_id', 'proveedor_id', 'precio', 'stock'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function detallesVentas()
    {
        return $this->hasMany(DetalleVenta::class);
    }
}
