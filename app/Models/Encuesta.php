<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'pregunta1',
    'pregunta2',
    'pregunta3',
    'pregunta4',
    'escala',
    'folio'
    ];
}
