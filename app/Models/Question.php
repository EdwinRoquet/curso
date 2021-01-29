<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso_id',
        'pregunta',
        'opciones',
        'ruta_imagen',
        'respuesta'
    ];


    public function curso()
     {
         return $this->belongsTo(Curso::class, 'curso_id');
     }
}
