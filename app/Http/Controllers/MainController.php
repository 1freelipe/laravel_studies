<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mostrarValor($value) {
        echo 'O valor do parâmetro é de: ' . $value;
    }

    public function mostrarValores($value1, $value2) {
        echo 'Os valores são: ' . $value1 . ' e ' . $value2;
    }
}
