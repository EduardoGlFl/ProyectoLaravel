@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Editar detalles de Section</h1>
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
              <form action="{{route('section.update', $section->id)}}" method="POST">
                @csrf
                @method('PUT')
                     
                  <div class="mb-3">
                    <label class="form-label">Descripción </label>
                    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$section->descripcion}}">
                  </div>    
                  <div class="mb-3">
                    <label class="form-label">Precioo</label>
                    <input id="precio" name="precio" type="text" class="form-control" value="{{$section->precio}}">
                  </div>    
                 
                  
                    <button class="btn btn-primary" type="submit">Guardar Cambios</button>
                 

                
                  
                    <a href="/section" class="btn btn-secondary" tabindex="5">Cancelar</a>
                 
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