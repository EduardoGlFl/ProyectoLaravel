@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de participantes a eventos</h1>
@stop

@section('content')
<div class="card shadow my-4 border-0 mx-auto" >
            <div class="card-body">                             
              @if($errors->any())
                <div class="alert alert-danger">
                  @foreach($errors->all() as $error)
                    - {{ $error }} <br>
                  @endforeach
                </div>
              @endif
              <form action="{{route('evento-participante.store')}}" method="POST" class="row g-3">
                @csrf
                  <div class="col-md-8">
                    <label for="exampleDataList" class="form-label">Eventos: </label>
                    <select name="events_id" id="events_id" class="form-control" tabindex="3">
                      <option value="" hidden>Seleccione el evento a registrarse</option>
                      @foreach($evento as $item)
                      <option value="{{$item->id}}">{{$item->nombre}}</option>
                      @endforeach
                    </select>
                      {{-- <input class="form-control" list="nombre" id="nombre_id" placeholder="Type to search...">
                        {{-- <datalist id="nombre">
                          @foreach($evento as $item)
                          <option value="{{$item->id}}">{{$item->nombre}}</option>
                          @endforeach
                        </datalist> --}} 
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Tipo de Participante:</label>
                    <select name="participant_types_id" id="participant_types_id" class="form-control" tabindex="3">
                      <option value="" hidden>Seleccione el tipo de participante</option>
                      @foreach($tipoparticipante as $item)
                      <option value="{{$item->id}}">{{$item->tipo}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-12">
                    <label class="form-label">Nombre del participante:</label>
                    {{-- <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..."> --}}
                    <select name="participants_id" id="participants_id" class="form-control " tabindex="3">
                      @foreach($participante as $item)
                      <option value="" hidden>Seleccione el nombre del participante</option>
                      <option value="{{$item->id}}">{{$item->nombres}} {{$item->apellidoPaterno}} {{$item->apellidoMaterno}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-12">
                    <label class="form-label">Institucion de procedencia:</label>
                    <select name="institutions_id" id="institutions_id" class="form-control" tabindex="3">
                      <option value="" hidden>Seleccione la institucion de procedencia</option>
                      @foreach($institucion as $item)
                      <option value="{{$item->id}}">{{$item->nombreCorto}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Documento: </label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                    <datalist id="datalistOptions">
                    </datalist>
                  </div>
                  <div class="col-md-12">
                    <button class="btn btn-primary" type="submit">Inscribir a evento</button>
                  </div>
              </form>
            </div>
            
</div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script> 
      $(document).ready(function() {
          $('.js-example-basic-single').select2();
      });
    </script>
@stop