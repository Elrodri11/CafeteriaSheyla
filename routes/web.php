<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\ClasesController;
use App\Http\Controllers\ClasesAlumnoController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\ProductoController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'login');

// // Ruta para mostrar el formulario de registro
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// // Ruta para procesar el formulario de registro

// Route::post('/register', [RegisterController::class, 'register']);

// si no se encuentra manda a la vista 404 y el link es /404
Route::fallback(function () {
    return view('404');
});


Auth::routes();

//Grupo de rutas para usuarios loggeados
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard' , [HomeController::class, 'index'])->name('dashboard');

    Route::get('/punto-de-venta', [App\Http\Controllers\PosController::class, 'index'])->name('pos.index');

    Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu.index');

    Route::get('/inventario', [App\Http\Controllers\InventarioController::class, 'index'])->name('inventario.index');

    Route::get('/estadisticas', [App\Http\Controllers\EstadisticasController::class, 'index'])->name('estadisticas.index');

    Route::get('/caja', [App\Http\Controllers\CajaController::class, 'index'])->name('caja.index');

    Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios.index');

    Route::get('/profesor', [ProfesorController::class, 'index'])->name('profesor.index');
    Route::post('/profesor', [ProfesorController::class, 'store'])->name('profesor.store');
    Route::post('/profesor/{id}', [ProfesorController::class, 'destroy'])->name('profesor.destroy');

    Route::get('/alumno', [AlumnoController::class, 'index'])->name('alumno.index');
    Route::post('/alumno', [AlumnoController::class, 'store'])->name('alumno.store');
    Route::post('/alumno/{id}', [AlumnoController::class, 'destroy'])->name('alumno.destroy');

    Route::get('/clases', [App\Http\Controllers\ClasesController::class, 'index'])->name('clase.index');
    Route::post('/clases', [App\Http\Controllers\ClasesController::class, 'store'])->name('clase.store');

    Route::post('/clase/agregarAlumnos', [App\Http\Controllers\ClasesController::class, 'agregarAlumnos'])->name('clase.agregarAlumnos');

    
    Route::post('/clases/{id}', [App\Http\Controllers\ClasesController::class, 'destroy'])->name('clase.destroy');

    Route::get('/clases-de-alumno', [App\Http\Controllers\ClasesAlumnoController::class, 'index'])->name('claseAlumno.index');

    Route::get('/asistencia/{id}', [App\Http\Controllers\AsistenciaController::class, 'index'])->name('asistencia.index');

    Route::post('/guardar-asistencias/{clase}', [App\Http\Controllers\AsistenciaController::class, 'guardarAsistencias'])->name('guardar.asistencias');

    Route::get('mis-asistencias/{id}', [App\Http\Controllers\ClasesAlumnoController::class, 'mostrarAsistencias'])->name('asistencias.alumno');

    Route::get('/obtener-ultimo-uuid', [App\Http\Controllers\TarjetasController::class, 'obtenerUltimoUUID']);
    

    Route::get('/nuevo-producto', [ProductoController::class, 'formulario'])->name('nuevo.producto');
    Route::post('/guardar-producto', [ProductoController::class, 'guardar'])->name('guardar.producto');



});

