<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Nombre de la tabla (opcional, pero lo pongo para mayor claridad)
    protected $table = 'productos';

    // Clave primaria
    protected $primaryKey = 'id';

    // Si la tabla usa incrementos automáticos
    public $incrementing = true;

    // Tipo de la clave primaria
    protected $keyType = 'int';

    // Si tiene timestamps (como created_at y updated_at)
    public $timestamps = true;

    // Columnas que se pueden asignar de forma masiva
    protected $fillable = [
        'nombre',
        'precio',
        'stock',
    ];
}
