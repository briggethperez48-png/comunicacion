<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inicioEvento = \Carbon\Carbon::parse('2026-03-18')->startOfDay();
        $hoy = now()->startOfDay();
        
        // diffInDays nos dará 0 el primer día, 1 el segundo, etc.
        $diaActual = $inicioEvento->diffInDays($hoy) + 1;
        $diasEvento = 3;

        // Si es antes del evento, que sea 0 (ningún día activo)
        if($hoy->lt($inicioEvento)) {
            $diaActual = 0;
        }

        // ELIMINAMOS la línea que limitaba el día al máximo de días del evento
        // para que si diaActual es 4, 5 o 100, la vista sepa que ya pasó.

        return view('formulario.asistencia', [
            'diasEvento' => $diasEvento,
            'diaActual'  => $diaActual
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inicioEvento = Carbon::parse('2026-03-18')->startOfDay();
        $diasEvento = 3;
        $diaActual = $inicioEvento->diffInDays(now()->startOfDay()) + 1;

        if($request->dia != $diaActual || $diaActual > $diasEvento || $diaActual < 1){
            return redirect('/content/objetivos')->with('error','No puedes registrar asistencia en este día');
        }

        $yaRegistro = Asistencia::where('user_id', Auth::id())
            ->where('dia', $diaActual)
            ->exists();

        if($yaRegistro){
            return redirect('/content/objetivos')->with('error','Ya registraste asistencia hoy');
        }

        Asistencia::create([
            'user_id' => Auth::id(),
            'dia' => $diaActual,
            'fecha' => now()
        ]);

        return redirect('/content/objetivos')->with('asistencia','Asistencia exitosa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asistencia $asistencia)
    {
        //
    }
}
