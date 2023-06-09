<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\TurnoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'buscaturno'])->name('home.buscaturno');

Route::resource('/medico', MedicoController::class);
Route::resource('/paciente',PacienteController::class);
Route::resource('/turno',TurnoController::class);

//GRUPO CONTROLADOR DEL MEDICO
// Route::controller(MedicoController::class)->group(function(){
//     Route::get('/medico', 'index')->name('medico.index');
//     //Route::get('/index', 'index');
//     Route::get('/create', 'create')->name('medico.create');
//     Route::post('/store', 'store')->name('medico.store');
//     Route::get('/show/{id}','show')->name('medico.show');
//     Route::get('/edit/{id}','edit')->name('medico.edit');
//     Route::put('/update/{id}','update')->name('medico.update');
//     Route::delete('/delete/{id}','destroy')->name('medico.destroy');
// });

//GRUPO CONTROLADOR DEL PACIENTE
// Route::controller(PacienteController::class)->group(function(){
//     Route::get('/paciente', 'index')->name('paciente.index');
//     //Route::get('/index', 'index');
//     Route::get('/create', 'create')->name('paciente.create');
//     Route::post('/store', 'store')->name('paciente.store');
//     Route::get('/show/{id}','show')->name('paciente.show');
//     Route::get('/edit/{id}','edit')->name('paciente.edit');
//     Route::put('/update/{id}','update')->name('paciente.update');
//     Route::delete('/delete/{id}','destroy')->name('paciente.destroy');
// });

