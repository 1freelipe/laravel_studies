<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller {
    public function showView(): View {
        $data = [
            'name' => 'Felipe Rodrigues',
            'DDD' => '19'
        ];

        return view('home', $data);
    }
}
