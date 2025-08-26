<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tareas',[TareasController::class, 'index'])->name('tareas');
Route::post('/tareas',[TareasController::class, 'store'])->name('tareas');

Route::get('/tareas/{id}', [TareasController::class, 'show'])->name('tareas-editar');/*aqui estamos pidiendo el id para poder usarlo despues en update*/
Route::patch('/tareas/{id}', [TareasController::class, 'update']);/*ya que necesitamos proporcionar el id en la solicitud dentro del html (blade) */

Route::delete('/tareas/{id}', [TareasController::class, 'destroy'])->name('tareas-eliminar');

Route::get('/inicio', function () {
    return view('home',
    ['nombre'=>'Juan',
    'edad'=>16,
    'frutas'=>['manzana','sandia','platano']
    ]);
});

Route::get('/holamundo', function () {
    return view('holamundo');
});
Route::get('/biografia', function() {
    return view('bio');
});
Route::get('/categorias', function() {
    return view('categorias');
});




