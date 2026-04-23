<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::view('/','home');

Route::get('/valor/{value}', [MainController::class, 'mostrarValor']);
Route::get('/valores/{value1}/{value2}', [MainController::class, 'mostrarValores']);

// Definindo parâmetros com constraints
Route::get('/exp1/{value}', function($value) {
    echo $value;
})->where('value', '[0-9]+'); // Essa expressão regular quer dizer que podem números de 0 a 9 e vários algarismos.
// O where define a tipagem do parâmetro a ser passado na rota

Route::get('/exp2/{value}', function($value) {
    echo $value;
})->where('value', '[A-Za-z-0-9]+'); // Definindo caracteres alfanuméricos
