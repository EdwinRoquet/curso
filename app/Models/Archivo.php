<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'activa',
        'curso_id',
        'user_id',
        'ruta_temario',
        'ruta_diploma',
        'ruta_dc3',
        'ruta_qr',
    ];

     // Relación 1:1 archivo  y usuario
     public function usuario()
     {
         return $this->belongsTo(User::class, 'user_id');
     }
     // Relación 1:1 archivo y curso
     public function curso()
     {
         return $this->belongsTo(Curso::class, 'curso_id');
     }
}
