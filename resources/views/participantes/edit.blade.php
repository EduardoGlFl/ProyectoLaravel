@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar datos del participantes</h1>
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
              <form action="{{route('participantes.update', $participante->id)}}" method="POST" class="row g-3">
                @csrf
                @method('PUT')
                  <div class="col-md-4">
                    <label class="form-label">Nombre(s)</label>
                    <input id="nombres" name="nombres" type="text" class="form-control" value="{{$participante->nombres}}">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Apellido Paterno</label>
                    <input id="apellidoPaterno" name="apellidoPaterno" type="text" class="form-control" value="{{$participante->apellidoPaterno}}">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Apellido Materno</label>
                    <input id="apellidoMaterno" name="apellidoMaterno" type="text" class="form-control" value="{{$participante->apellidoMaterno}}">
                  </div>
                  <div class="col-6">
                    <div class="form-check">
                      <input id="genero" name="genero" class="form-check-input" type="checkbox" value="M" value="{{$participante->genero}}">
                      <label class="form-check-label" for="gridCheck">
                        Masculino
                      </label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-check">
                      <input id="genero" name="genero" class="form-check-input" type="checkbox" value="F" value="{{$participante->genero}}">
                      <label class="form-check-label" for="gridCheck">
                        Femenino
                      </label>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="inputAddress2" class="form-label">Email</label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="example@mail.com" value="{{$participante->email}}">
                  </div>
                  <div class="col-6">
                    <label for="inputAddress2" class="form-label">Telefono</label>
                    <input id="telefono" name="telefono" type="telephone" class="form-control" placeholder="**********" value="{{$participante->telefono}}">
                  </div>
                  <div class="d-grid gap-2 col-6">
                    <button class="btn btn-primary" type="submit">Guardar Cambios</button>
                  </div>
                  <div class="d-grid gap-2 col-6">
                    <a href="/participantes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                  </div
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