<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\institution;
use App\Models\institutionType;

class InstitucionController extends Controller
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
     
        $institucion = institution::join('institution_types', 'institution_types.id', '=', 'institutions.institution_types_id')
        ->select('institutions.*', 'institution_types.tipo')
        ->get();
        
        /* el codigo de arriba es igual a lo siguiente
        Select * from institutions
        inner join institution_types on institution_types.id = institutions.institution_types_id
        */
        return view('institucion.index',['institucion' => $institucion ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get all institution_types data
        $institucion = institutionType::all();
        return view('institucion.create',['institucion' => $institucion]);
      
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
            'nombreCorto' => 'required',
            'nombreLargo' => 'required',
            'institution_types_id' => 'required',
        ]);   

        institution::create($request->all());
        return redirect('/institucion');

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
    public function edit(institution $institucion)
   
    {
        //
        $instituciontypes = institutionType::all();
        return view('institucion.edit', ['institucion' => $institucion, 'instituciontypes' => $instituciontypes]);
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
        $request->validate([
            'nombreCorto' => 'required',
            'nombreLargo' => 'required',
            'institution_types_id' => 'required',
        ]); 

        institution::find($id)->update($request->all());
        return redirect('/institucion')-> with('success', 'Institucion actualizada');


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
        $institucion = institution::findOrFail($id);
        $institucion->delete();
        return redirect('/institucion');
    }
}
