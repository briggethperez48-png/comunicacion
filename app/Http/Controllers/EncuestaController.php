<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Encuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class EncuestaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inscripcion = Registro::where('user_id', Auth::id())->first();

        if (!$inscripcion) {
            return redirect('/formulario/create')
                ->with('error', 'Primero debes inscribirte al curso.');
        }

        $yaTerminado = Encuesta::where('user_id', Auth::id())->exists();

        if ($yaTerminado) {
            return redirect('content/objetivos')
                ->with('error','Ya respondiste la evaluación.');
        }

        // RESPUESTAS CORRECTAS
        $correctas = [
            'pregunta1' => 'A',
            'pregunta2' => 'C',
            'pregunta3' => 'B',
            'pregunta4' => 'B',
        ];

        $respuestasUsuario = [
            'pregunta1' => $request->pregunta1,
            'pregunta2' => $request->pregunta2,
            'pregunta3' => $request->pregunta3,
            'pregunta4' => $request->pregunta4,
        ];

        $aciertos = 0;

        foreach ($correctas as $pregunta => $respuestaCorrecta) {
            if (isset($respuestasUsuario[$pregunta]) &&
                $respuestasUsuario[$pregunta] === $respuestaCorrecta) {
                $aciertos++;
            }
        }

        $aprobado = $aciertos >= 3;

        $folio = null;

        if ($aprobado) {
            $folio = 'MX-2026-' . strtoupper(Str::random(8));
        }

        // Guardar
        Encuesta::create([
            'user_id' => Auth::id(),
            'pregunta1' => $request->pregunta1,
            'pregunta2' => $request->pregunta2,
            'pregunta3' => $request->pregunta3,
            'pregunta4' => $request->pregunta4,
            'escala' => $request->escala,
            'folio' => $folio
        ]);

        return redirect('content/objetivos')->with([
            'evaluacion_finalizada' => true, // Nueva bandera para disparar el JS
            'aprobado' => $aprobado,
            'aciertos' => $aciertos,
            'folio' => $folio
        ]);
    }
}
