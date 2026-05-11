<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Route::view('/','home');

Route::get('/', function() {
    echo 'Hello World!';
});
