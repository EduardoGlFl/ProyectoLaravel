<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
//use App\Models\User;

class CategoríasController extends Controller
{
    public function ver($nombre)
    {
        if(View::exists('nanagment.adminfront')) {
            return view('managment.adminfront', ['nameAdmin' => $nombre]);
        }
        else {
            return View::make('welcome')->with('nombre','Juan')
                                        ->with('apellido', 'Pérez');
        }
    }
}
