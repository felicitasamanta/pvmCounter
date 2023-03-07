<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkaiciuokleController extends Controller
{
    public function index () {
        return view('Skaiciuokle');
    }
    public function result(Request $request) {
        $kaina = $request -> kaina;
        $kainaSuPVM = $kaina * 1.21;
        $pvm= $kaina * 0.21;
        return view ('Result', [
            'kaina' => $kaina,
            'kainaSuPVM' => $kainaSuPVM,
            'pvm' => $pvm
        ]);
    }
}

