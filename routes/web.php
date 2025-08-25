<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tareas',[TareasController::class, 'index'])->name('tareas');

Route::post('/tareas',[TareasController::class, 'store'])->name('tareas');

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

