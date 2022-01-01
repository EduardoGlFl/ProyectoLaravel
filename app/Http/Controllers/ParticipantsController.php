<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participants;

class ParticipantsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participantes = Participants::all();
        return view('participantes.index',['participantes' => $participantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('participantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|unique:participants',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'genero' => 'required',
            'email' => 'required',
            'telefono' => 'required',
        ]);

        Participants::create($request->all());

        return redirect('/participantes');
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
    public function edit(Participants $participante)
    {
        return view ('participantes.edit',compact('participante'));
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
        $participantes = Participants::find($id);

        $request->validate([
            'nombres' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'genero' => 'required',
            'email' => 'required',
            'telefono' => 'required',
        ]);

        $participantes->update($request->all());
        return redirect('/participantes')->with('success','Post updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $participante = Participants::find($id);
        $participante->delete();
        return redirect('/participantes');
    }
}
