@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Editar datos de Ticket</h1>
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
              <form action="{{route('ticket.update', $ticket->id)}}" method="POST">
                @csrf
                @method('PUT')
                 
                <div class="mb-3">
          <label for="" class="form-label">Detalle Ticket</label>
          <select name="section_id" id="section_id" class="form-control" tabindex="3">
          <option value="">--- Seleccioné ticket  ---</option>
             @foreach($section as $sec)
             <option value="{{$sec->id}}" ><span class="p-4 text-gray-500 bg-red">Descripción:</span> {{$sec-> descripcion}} Precio:${{$sec-> precio}} MX</option>
             @endforeach
          </select>
        </div>
                 
                  
                    <button class="btn btn-primary" type="submit">Guardar Cambios</button>                 
                    <a href="/participantes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                 
              </form>
          </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop