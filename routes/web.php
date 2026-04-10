<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\ExamenController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/formulario/create', [RegistroController::class, 'create']);
Route::post('/formulario', [RegistroController::class, 'store']);
Route::post('/formulario/create/fetch', [RegistroController::class, 'fetch'])->name('registroController.fetch');

// RUTAS PROTEGIDAS
Route::middleware('auth')->group(function () {
    Route::get('/formulario', [RegistroController::class, 'index']);
    Route::get('/formulario/{id}/edit', [RegistroController::class, 'edit']);
    Route::put('/formulario/{id}', [RegistroController::class, 'update']);
    Route::delete('/formulario/{id}', [RegistroController::class, 'destroy']);
});

Route::post('/formularios/asistencia', [AsistenciaController::class, 'store'])
    ->name('asistencia.store')
    ->middleware('auth');
Route::get('/registroasistencia',[AsistenciaController::class,'index'])
    ->middleware('auth');

    //Por error, están invertidos. Encuesta->Evaluación; Examen->Encuesta. Las vistas están bien. 
// Route::post('/formulario/encuesta', [EncuestaController::class, 'store'])
//     ->name('encuesta.store')
//     ->middleware('auth');
// Route::get('/evaluacion', function () {
//     return view('formularios.encuesta');
// })->middleware('auth');

Route::post('/formulario/examen', [ExamenController::class, 'store'])
    ->name('examen.store')
    ->middleware('auth');
Route::get('/encuesta', function () {
    return view('formularios.examen');
})->middleware('auth');

    //Vistas estáticas => Esta OK
Route::prefix('content')->group(function () {
    //index -> home
    Route::view('/', 'contenido/home');

    Route::view('/contactos', 'contenido/contacto');
    Route::view('/objetivos', 'contenido/objetivos');
    Route::view('/ponentes', 'contenido/ponentes');
    Route::view('/preguntas', 'contenido/preguntas');
    Route::view('/programa', 'contenido/programa');
    Route::view('/avisoprivacidad', 'contenido/aviso');
    // Route::view('/terminosycondiciones', 'contenido/terminos');
});

//Nimodillo
// Route::post('login', [LoginController::class, 'login']);   
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');
Auth::routes();