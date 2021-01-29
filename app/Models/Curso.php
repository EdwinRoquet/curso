<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'ruta_imagen',
        'temario'
    ];


       // Relación 1:n
       public function curso()
       {
           return $this->hasMany(Archivo::class);
       }

       public function examen()
       {
           return $this->hasOne(Exam::class);
       }

       public function preguntas()
       {
           return $this->hasMany(Question::class, 'curso_id');
       }

}
