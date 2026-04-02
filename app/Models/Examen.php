<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    protected $fillable = [
    'usuario_id',
    'pregunta1',
    'pregunta2',
    'pregunta3',
    'sugerencias',
    'escala',
    'folio'
];
}
