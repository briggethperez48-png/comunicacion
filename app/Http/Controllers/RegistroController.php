<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function __construct() {
            $this->middleware('auth')->except(['create','store','fetch']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //Es para leer
        $datoR['registros']=Registro::paginate(20);
            return view('formulario.index', $datoR);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $institucion_list = DB::table('instituciones')
                        ->select('idInsti','instiPro')
                        ->get();
       
        return view('formularios.registro', compact(
            'institucion_list',
        ));
    }

        //Realiza las búsquedas del formulario de la unidad.
    function fetch(Request $request) {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        
        $data = DB::table('unidades')
                    ->where('idInsti', $value)
                    ->select('unidad')
                    ->get();
         $output = '<option value="">Selecciona unidad</option>';

         foreach($data as $row){
            $output .= '<option value="'.$row->unidad.'">'
                        .$row->unidad.'</option>';
        }

        return $output;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alcaldiasValidas = [
        "ÁLVARO OBREGÓN", "AZCAPOTZALCO", "BENITO JUÁREZ", "COYOACÁN", 
        "CUAJIMALPA DE MORELOS", "CUAUHTÉMOC", "GUSTAVO A. MADERO", 
        "IZTACALCO", "IZTAPALAPA", "MAGDALENA CONTRERAS", "MIGUEL HIDALGO", 
        "MILPA Alta", "TLÁHUAC", "TLALPAN", "VENUSTIANO CARRANZA", "XOCHIMILCO"
        ];

        $campos = [
            'Nombre' => 'required|string|max:100|regex:/^[a-zA-Z0-9ñÑ\s]+$/u',
            'ApellidoPaterno' => 'required|string|max:100|regex:/^[a-zA-Z0-9ñÑ\s]+$/u',
            'ApellidoMaterno' => 'required|string|max:100|regex:/^[a-zA-Z0-9ñÑ\s]+$/u',
            'Profesion' => 'required|string|max:150|regex:/^[a-zA-Z0-9ñÑ\s]+$/u',
            'Institucion' => 'required',
            'UnidadMedica' => 'required',
            'EstadoProcedencia' => 'required',
            'Pais' => 'required',
            'Alcaldia' => [
                'required',
                function ($attribute, $value, $fail) use ($request, $alcaldiasValidas) {
                    $estado = $request->input('EstadoProcedencia');
                    $val = strtoupper($value);
                    if ($estado === 'Ciudad de México') {
                        if ($val === 'NO APLICA' || empty($val)) {
                            $fail('Para CDMX debe seleccionar una alcaldía.');
                        }
                        if (!in_array($val, $alcaldiasValidas)) {
                            $fail('La alcaldía seleccionada no es válida.');
                        }
                    }
                },
            ],
            'Edad' => 'required|numeric',
            'Sexo' => 'required',
            'Numero' => 'required|max:20', 
            'Eres' => 'required',
            'email' => 'required|email|unique:users,email', // Evita correos duplicados
            'password' => 'required|min:8',
        ];
        $mensaje=[
            'required'=>'El campo ":attribute" es requerido.'
        ];
        $this->validate($request,$campos,$mensaje);

        $datosUsuario = request()->except('_token','email','password');
        

        foreach ($datosUsuario as $key => $value) {
            if($key != 'email' && $key != 'password'){
                $datosUsuario[$key] = strtoupper($value);
            }
        }

        $user = User::create([
            'name' => $request->Nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
            Auth::login($user);
        
        $datosUsuario['user_id'] = $user->id;

        Registro::create($datosUsuario);

        return redirect('content/objetivos')
            ->with('mensaje','¡Gracias por tu suscripción!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $institucion_list = DB::table('instituciones')
                        ->select('idInsti','instiPro')
                        ->get();

        $emplead1 = Registro::findOrFail($id);
        $unidades_list = DB::table('unidades')
                        ->where('idInsti', $emplead1->Institucion)
                        ->select('unidad')
                        ->get();

        return view('formulario.edit', compact(
                                        'emplead1',
                                        'institucion_list',
                                        'unidades_list'
                                        ))
                                        
            ->with('institucion_list', $institucion_list);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'Nombre' => 'required|string|max:30',
            'ApellidoPaterno' => 'required|string|max:30',
            'ApellidoMaterno' => 'required|string|max:30',
            'Profesion' => 'required|string|max:75',
            'Institucion' => 'required|string',
            'UnidadMedica' => 'required|string',
            'EstadoProcedencia' => 'required|string|max:75',
            'Pais' => 'required|string|max:75',
            'Edad' => 'required|integer|min:18|max:80',
            'Sexo' => 'required',
            'Numero' => 'required|integer|digits:10',
            'Eres' => 'required|string',
            'email' => 'required|email|max:50',
            'password' => 'nullable|min:8|max:15',
        ];
        $mensaje=[
            'required'=>'El campo ":attribute" es requerido.',
            'Edad.min' => 'Error en el campo ":attribute". Favor de rectificar',
            'Edad.max' => 'Error en el campo ":attribute". Favor de rectificar',
            'Numero.digits' => 'Error en el campo ":attribute". Favor de rectificar',
            'email.email' => 'Error en el campo ":attribute". Favor de rectificar',
            'password.min' => 'Error en el campo ":attribute". Favor de rectificar'
        ];
        $request->validate($campos,$mensaje,[
            'Nombre'=>'Nombre',
            'ApellidoPaterno'=>'Apellido paterno',
            'ApellidoMaterno'=>'Apellido materno',
            'Edad'=>'edad',
            'Numero'=>'número telefónico',
            'password' => 'contraseña'
        ]);
        $this->validate($request,$campos,$mensaje);
        
        $datosUsuario = request()->except(['_token','_method']);

        if($request->password){
            $datosUsuario['password'] = Hash::make($request->password);
        }else{
            unset($datosUsuario['password']);
        }

        registro::where('id','=',$id)->update($datosUsuario);
        return redirect('formulario')
            ->with('mensaje','¡Éxito! Editaste un usuario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        registro::destroy($id);
        return redirect('formulario')
            ->with('mensaje','¡Éxito! Usuario eliminado');
    }
}
