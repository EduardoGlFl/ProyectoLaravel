@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Participantes registrados</h1>
@stop

@section('content')
    <table id="register" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          {{-- <th scope="col">#</th> --}}
          <th scope="col">Evento</th>
          <th scope="col">Participante</th>
          <th scope="col">Tipo de participante</th>
          <th scope='col'>Institucion</th>
          <th scope='col'>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($event_participant as $eventoP)
          <tr>
            <td>{{$eventoP['nombre']}}</td>
            <td>{{$eventoP['nombres']}} {{$eventoP['apellidoPaterno']}} {{$eventoP['apellidoMaterno']}}</td>
            <td>{{$eventoP['tipo']}}</td>
            <td>{{$eventoP['nombreCorto']}}</td>
            {{-- <td>{{$evento['fechaFin']}}</td> --}}
            <td>
              <form action="{{route('eventos.destroy', $eventoP->id)}}" method="POST">
                <a class="btn btn-info" href="{{ route('evento-participante.edit',$eventoP->nameid) }}">Editar</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" onclick="return confirm('¿Desea eliminar?...')">Borrar</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="row justify-content-md-center">
      <div class=" col-md-auto">
        <a href="evento-participante/create" class="btn btn-primary" type="button">Registrar Participante a Evento</a>
      </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"> </script>
    <script>
      $(document).ready(function() {
          $('#register').DataTable({
            "lengthMenu": [[5,10,50,-1],[5,10,50,"All"]]
          });
      } );
    </script>
@stop