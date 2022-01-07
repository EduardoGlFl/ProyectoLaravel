@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      - {{$error}} <br>
      @endforeach
    </div>
    @endif
    <form action="{{route('eventos.update',$evento->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="" class="form-label">Nombre del evento</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$evento->nombre}}" tabindex="1" >
      </div>
      
      <div class="mb-3">
          <label for="" class="form-label">Descripcion</label>
          <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$evento->descripcion}}" tabindex="2" >
        </div>
    
    
      <div class="mb-3">
        <label for="date" class="form-label">Fecha de Inicio</label>
          <div class="input-group date col-sm-4">
            <input id="fechaInicio" name="fechaInicio" type="text" class="form-control" value="{{$evento->fechaInicio}}" tabindex="3">
              <span class="input-group-append">
                <span class="input-group-text bg-white">
                  <i class="fa fa-calendar"></i>
                </span>
              </span>
          </div>
      </div>

      <div class="mb-3">
        <label for="date" class="form-label">Fecha de Termino</label>
          <div class="input-group date col-sm-4" >
            <input id="fechaFin" name="fechaFin" type="text" class="form-control" value="{{$evento->fechaFin}}"tabindex="3">
              <span class="input-group-append">
                <span class="input-group-text bg-white">
                  <i class="fa fa-calendar"></i>
                </span>
              </span>
          </div>
      </div>

    <a href="/eventos" class="btn btn-secondary" tabindex="5">Cancelar</a>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
          $(function() {
              $('#fechaInicio').datepicker({
                format: 'yyyy-mm-dd'
              });
          });
          $(function() {
              $('#fechaFin').datepicker({
                format: 'yyyy-mm-dd'
              });
          });
    </script>
@stop