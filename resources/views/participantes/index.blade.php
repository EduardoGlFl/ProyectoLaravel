@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center" >Participantes</h1>
@stop

@section('content')
      <div>
        <table id="participantes" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido Paterno</th>
              <th scope="col">Apellido Materno</th>
              <th scope="col">Genero</th>
              <th scope="col">Email</th>
              <th scope="col">Telefono</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($participantes as $participante)
                <tr>
                <td>{{$participante['nombres']}}</td>
                <td>{{$participante['apellidoPaterno']}}</td>
                <td>{{$participante['apellidoMaterno']}}</td>
                <td>{{$participante['genero']}}</td>
                <td>{{$participante['email']}}</td>
                <td>{{$participante['telefono']}}</td>
                <td>
                  <form action="{{ route('participantes.destroy', $participante->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('participantes.edit',$participante->id) }}">Editar</a>
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
            <a href="participantes/create" class="btn btn-primary" type="button">Registrar Participante</a>
          </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"> </script>
    <script>
      $(document).ready(function() {
          $('#participantes').DataTable({
            "lengthMenu": [[5,10,50,-1],[5,10,50,"All"]]
          });
      } );
    </script>
@stop