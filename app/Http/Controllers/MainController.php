<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller {
    public function showView(): View {
        // $data = [
        //     'name' => 'Felipe Rodrigues',
        //     'DDD' => '19'
        // ];

        // return view('home', $data);

        // Passing datas from method with
        // return view('home')->with('name', 'Felipe Rodrigues Teixeira')->with('DDD', '19');

        // Passing datas from method compact
        // $name = 'Felipe Rodrigues Teixeira';
        // $DDD = '19';

        // return view('home', compact('name', 'DDD'));

        $data = [
            'value' => 100,
            'cities' => ['Los Angeles', 'New York', 'Massachussets'],
            'names' => ['Felipe', 'Rodrigues'],
            'index' => 1
        ];

        return view('home', $data);
    }
}
