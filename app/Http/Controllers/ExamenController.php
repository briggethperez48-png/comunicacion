<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Examen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ExamenController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inscripcion = registro::where('user_id', Auth::id())->first();

        if (!$inscripcion) {
            return redirect('/formulario/registro')
                ->with('error', 'Primero debes inscribirte al curso.');
        }

        $yaTerminado = Examen::where('usuario_id', Auth::id())->exists();

        if ($yaTerminado) {
            return redirect('content/objetivos')
                ->with('error','Ya respondiste la encuesta.');
        }

        $folio = 'SP-MX-2026-' . strtoupper(Str::random(8));

        Examen::create([
            'usuario_id' => Auth::id(),
            'pregunta1' => $request->pregunta1,
            'pregunta2' => $request->pregunta2,
            'pregunta3' => $request->pregunta3,
            'sugerencias' => $request->sugerencias,
            'escala' => $request->escala,
            'folio' => $folio
        ]);

        return redirect('/objetivos')->with('folio', $folio);
    }
}
