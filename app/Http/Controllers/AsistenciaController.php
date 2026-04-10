<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AsistenciaController extends Controller
{
    private $horaInicioAsistencia = '15:00:00'; 
    private $timezone = 'America/Mexico_City'; // La definimos como propiedad para no repetir

    public function index()
    {
        $ahora = Carbon::now($this->timezone);
        $hoy = $ahora->copy()->startOfDay();
        
        $inicioEvento = Carbon::parse('2026-04-06', $this->timezone)->startOfDay();
        
        $diaActual = $inicioEvento->diffInDays($hoy) + 1;
        $diasEvento = 1;

        $apertura = Carbon::parse($ahora->format('Y-m-d') . ' ' . $this->horaInicioAsistencia, $this->timezone);
        $cierre = $apertura->copy()->addMinutes(30);

        if ($ahora->lt($apertura)) {
            $estadoAsistencia = 'antes'; 
        } elseif ($ahora->between($apertura, $cierre)) {
            $estadoAsistencia = 'durante'; 
        } else {
            $estadoAsistencia = 'despues';
        }

        return view('formularios.asistencia', [
            'diasEvento' => $diasEvento,
            'diaActual'  => $diaActual,
            'estadoAsistencia' => $estadoAsistencia, 
            'horaApertura' => $apertura->format('H:i'),
            'horaCierre' => $cierre->format('H:i')
        ]);
    }

    public function store(Request $request)
    {
        // IMPORTANTE: Usar la misma zona horaria que en el index
        $ahora = Carbon::now($this->timezone);
        $inicioEvento = Carbon::parse('2026-04-06', $this->timezone)->startOfDay();
        $diaActual = $inicioEvento->diffInDays($ahora->copy()->startOfDay()) + 1;

        // 1. Validar día correcto
        if($request->dia != $diaActual || $diaActual > 1 || $diaActual < 1){
            return redirect('/content/objetivos')->with('error','No puedes registrar asistencia en este día');
        }

        // 2. Validar ventana de 30 minutos (Usando la misma zona horaria)
        $apertura = Carbon::parse($ahora->format('Y-m-d') . ' ' . $this->horaInicioAsistencia, $this->timezone);
        $cierre = $apertura->copy()->addMinutes(30);

        if (!$ahora->between($apertura, $cierre)) {
            return redirect('/content/objetivos')->with('error', 'El tiempo de registro terminó a las ' . $cierre->format('H:i'));
        }

        // 3. Validar si ya registró
        $yaRegistro = Asistencia::where('user_id', Auth::id())
            ->where('dia', $diaActual)
            ->exists();

        if($yaRegistro){
            return redirect('/content/objetivos')->with('error','Ya registraste asistencia hoy');
        }

        Asistencia::create([
            'user_id' => Auth::id(),
            'dia' => $diaActual,
            'fecha' => $ahora // Se guarda con la hora correcta
        ]);

        return redirect('/content/objetivos')->with('asistencia','Asistencia exitosa');
    }
}