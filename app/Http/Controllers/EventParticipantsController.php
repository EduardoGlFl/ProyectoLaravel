<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EventParticipants;
use App\Models\Institution;
use App\Models\Event;
use App\Models\participantType;
use App\Models\Participant;


class EventParticipantsController extends Controller
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

        $event_participant = EventParticipants::join('events', 'events.id', '=', 'event_participants.events_id')
        ->join('participants', 'participants.id', '=', 'event_participants.participants_id')
        ->join('participant_types', 'participant_types.id', '=', 'event_participants.participant_types_id')
        ->join('institutions', 'institutions.id', '=', 'event_participants.institutions_id')
        ->select( 'event_participants.*','event_participants.id as nameid' ,'events.nombre', 'participants.nombres',  'participants.apellidoPaterno','participants.apellidoMaterno','participant_types.tipo', 'institutions.nombreCorto')
        ->get();

        return view('evento-participante.index',['event_participant'=>$event_participant]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evento = Event::all();
        $participante = Participant::all();
        $tipoparticipante = participantType::all();
        $institucion = Institution::all();
        return view('evento-participante.create',['evento' => $evento, 
                                                'participante' => $participante,
                                                'tipoparticipante' => $tipoparticipante,
                                                'institucion' => $institucion]);
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
            'events_id' => 'required',
            'participants_id' => 'required',
            'participant_types_id' => 'required',
            'institutions_id' => 'required',
        ]);

        EventParticipants::create($request->all());
        return redirect('/evento-participante');
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
    public function edit(EventParticipants $event_participant)
    {
        $evento = Event::all();
        $participante = Participant::all();
        $tipoparticipante = participantType::all();
        $institucion = Institution::all();
        return view('evento-participante.edit', ['event_participant'=>$event_participant, 
                                                'evento' => $evento, 
                                                'participante' => $participante,
                                                'tipoparticipante' => $tipoparticipante,
                                                'institucion' => $institucion]);
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
    }
}
