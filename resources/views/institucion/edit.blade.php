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
    <form action="{{route('institucion.update',$institucion->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="" class="form-label">Nombre Corto</label>
        <input id="nombreCorto" name="nombreCorto" type="text" class="form-control" value="{{$institucion->nombreCorto}}" tabindex="1" >
      </div>
      
      <div class="mb-3">
          <label for="" class="form-label">Nombre Largo</label>
          <input id="nombreLargo" name="nombreLargo" type="text" class="form-control" value="{{$institucion->nombreLargo}}" tabindex="2" >
        </div>
    
        <div class="mb-3">
          <label for="" class="form-label">Tipo</label>
          <select name="institution_types_id" id="institution_types_id" class="form-control" tabindex="3"> 
           

            <!-- <option value="{{$institucion->institution_types_id}}">--- Seleccioné tipo Institución ---</option> -->
            <option value="{{$institucion->institution_types_id}}">--- Seleccioné tipo Institución ---</option>
            
            @foreach($instituciontypes as $ti)
            <option value="{{$ti->id}}" >{{$ti-> tipo}}</option>
            @endforeach     
         
          </select>
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