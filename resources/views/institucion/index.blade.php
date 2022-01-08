@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Instituciones</h1>
@stop

@section('content')
    <table id="instituciones" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <!-- {{-- <th scope="col">#</th> --}} -->
          <th scope="col">Nombre Corto</th>
          
          <th scope="col">Nombre Largo</th>
          <th scope='col'>Tipo</th>
          <th scope='col'>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($institucion as $inst)
          <tr>
            {{-- <td>{{$inst['id']}}</td> --}}
            <td>{{$inst['nombreCorto']}}</td>
            <td>{{$inst['nombreLargo']}}</td>
            <td>{{$inst['tipo']}}</td>
            
            <td>
              <form action="{{route('institucion.destroy', $inst->id)}}" method="POST">
                <a class="btn btn-info" href="{{ route('institucion.edit',$inst->id) }}">Editar</a>
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
        <a href="institucion/create" class="btn btn-primary" type="button">Registrar Nueva Institución</a>
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
          $('#eventos').DataTable({
            "lengthMenu": [[5,10,50,-1],[5,10,50,"All"]]
          });
      } );
    </script>
@stop