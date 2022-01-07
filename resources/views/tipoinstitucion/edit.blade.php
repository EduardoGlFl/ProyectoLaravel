@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Editar datos de Tipo Institución</h1>
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
              <form action="{{route('tipoinstitucion.update', $tipoinstitucion->id)}}" method="POST">
                @csrf
                @method('PUT')
                  <div class="mb-3">
                    <label class="form-label">Tipo</label>
                    <input id="tipo" name="tipo" type="text" class="form-control" value="{{$tipoinstitucion->tipo}}">
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