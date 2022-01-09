<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;
use App\Models\section;

class TicketController extends Controller
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
       
        $tickets = ticket::join('sections', 'sections.id', '=', 'tickets.section_id')
        ->select('tickets.*', 'sections.descripcion', 'sections.precio')
        ->get();
        // $tickets = ticket::join('sections', 'tickets.section_id', '=', 'sections.id')
        // ->select('tickets.*', 'sections.description', 'sections.precio')
        // ->get();
                
        return view('ticket.index', compact('tickets'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //get all section table data
        $section = section::all();
        return view('ticket.create',['section' => $section]);
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
            'section_id' => 'required'            
        ]);

        ticket::create($request->all());
        return redirect()->route('ticket.index')->with('status', 'Ticket creado con exito');
        
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
    public function edit(ticket $ticket)
    {
        //
        $section = section::all();
        return view('ticket.edit', ['ticket' => $ticket, 'section' => $section]);
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
            'section_id' => 'required'
        ]);

        ticket::find($id)->update($request->all());
        return redirect()->route('ticket.index')->with('status', 'Ticket actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete ticket
        $ticket = ticket::find($id);
        $ticket->delete();
        return redirect()->route('ticket.index')->with('status', 'Ticket eliminado con exito');

    }
}
