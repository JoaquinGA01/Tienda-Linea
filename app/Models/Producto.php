<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
/*     protected $fillable = [ 
        'nombre',
        'categoria',
        'descripcion',
        'precio',
        'stock',
        'ruta',
    ]; */

    protected $table = "producto";
    protected $primaryKey = "id";
    protected $fillable = [ 
        'nombre',
        'categoria',
        'descripcion',
        'precio',
        'stock',
        'ruta',
    ];

    public $timestamps = false;


}   
