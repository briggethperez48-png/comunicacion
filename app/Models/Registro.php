<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Registro extends Model
{
    use HasFactory;
    protected $fillable = [
            'user_id',
            'Nombre',
            'ApellidoPaterno',
            'ApellidoMaterno',
            'Profesion',
            'Institucion',
            'UnidadMedica',
            'EstadoProcedencia',
            'Pais',
            'Alcaldia',
            'Edad',
            'Sexo',
            'Modalidad',
            'Numero',
            'Eres',
            'email',
            'password'
    ];

}
