<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notas extends Model
{
    use HasFactory;

    protected $table = 'notas';

    protected $fillable = [
        'titulo',
        'id_autor',
        'contenido',
        'descripcion',
        'fecha_nota',
        'fecha_publicacion',
        'imagen',
        'visitas',
        'status'
    ];
}
