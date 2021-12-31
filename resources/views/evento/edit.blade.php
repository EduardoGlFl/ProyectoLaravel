@extends('layouts.plantillabase')

@section('contenido')
    <h2>Editar Registros</h2>
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
@endsection