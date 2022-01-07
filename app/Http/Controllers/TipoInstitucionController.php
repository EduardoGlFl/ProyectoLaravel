<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\institutionType;

class TipoInstitucionController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipoinstitucion = institutionType::all();
        return view('tipoinstitucion.index',['tipoinstitucion' => $tipoinstitucion]);
        // response()->json(['tipo-institucion'=>$tipoinstitucion], 201,
        // ['Content-Type' => 'application/json']);
      
        // return view('tipo-institucion.index',['tipo-institucion' => $tipoinstitucion]);
        // return response()-> view('tipo-institucion.index',compact('tipoinstitucion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {
        //
        return view('tipoinstitucion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tipo' => 'required',
        ]);

        institutionType::create($request->all());
        return redirect('/tipoinstitucion');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(institutionType $tipoinstitucion )
    {
        //
        return view('tipoinstitucion.edit', compact('tipoinstitucion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tipoinstitucion = institutionType::find($id);

        $request->validate([
            'tipo' => 'required',
        ]);

        $tipoinstitucion->update($request->all());
        return redirect('/tipoinstitucion')->with('success', 'Tipo de institución actualizado correctamente');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tipoinstitucion = institutionType::find($id);
        $tipoinstitucion->delete();
        return redirect('/tipoinstitucion')->with('success', 'Tipo de institución eliminado correctamente');
    }
}
