<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Categoria;
use App\Models\Proveedor;
use App\Models\PedidoDetalle;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'proveedor_id',
        'nombre',
        'descripcion',
        'precio',
        'stock'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function pedidoDetalles()
    {
        return $this->hasMany(PedidoDetalle::class);
    }
}