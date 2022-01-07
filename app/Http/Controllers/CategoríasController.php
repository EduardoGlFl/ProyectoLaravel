<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoríasController extends Controller
{
    public function ver($nombre)
    {
        if(View::exists('management.adminfront')) {
            return view('management.adminfront', ['nameAdmin' => $nombre]);
        }
        else {
            //return view::make('welcome', ['nombre'=>'Juan'])
            //return View::make('welcome',['nombre'=>'Juan'])
            return View::make('welcome')->with('nombre','Juan')
                ->with('apellido', 'Pérez');
        }
    }
}
