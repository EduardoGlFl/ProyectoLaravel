<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PeticionesController extends Controller
{
    public function testMethod(Request $request)
    {
        if(View::exists('pruebas.respuestas')) {
            return view('pruebas.respuestas', ['respuesta' => $request->path()]);
            //return view('pruebas.respuestas', ['respuesta' => $request->url()]);
        }
    }

    public function testPostMethod(Request $request, $param)
    {
        if(View::exists('pruebas.respuestas')) {
            //return view('pruebas.respuestas', ['respuesta' => $request->url()]);
            //return view('pruebas.respuestas', ['respuesta' => $request->path()]);
            echo "Recibo $param como parámetro de la ruta. " . '<br>';
            echo "Además recibimos estos datos por formulario: " . implode(', ', $request->all());
        }

    }
}
