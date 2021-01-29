<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'curso_id',
        'user_id',
        'total',
        'pre_acertadas',
        'incorrectas',
        'calificacion',
        'activa',
    ];


    public function curso()
     {
         return $this->belongsTo(Curso::class, 'curso_id');
     }
    public function usuario()
     {
         return $this->belongsTo(User::class, 'user_id');
     }
}
