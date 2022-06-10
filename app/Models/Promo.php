<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    //use HasFactory;
    protected $table="promociones";
    protected $primaryKey="id";
    protected $fillable=[
        'nombre', 'stock', 'categoria', 'descripcio', 'precio', 'promocion', 'ruta'
    ];

    public $timestamps = false;
}
