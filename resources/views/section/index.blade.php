@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center">Detalles del Ticket </h1>
@stop

@section('content')
<table  class="table table-striped" style="width:100%">
  <thead>
    <tr>
      
      <th scope="col">Descripción</th>
      <th scope="col">Precio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($section as $sec)
    <tr>
      

      <td>{{$sec['descripcion']}}</td>
      <td>$ {{$sec['precio']}} MX</td>
      
      <td>
        <form action="{{route('section.destroy', $sec->id)}}" method="POST">
          <a class="btn btn-info" href="{{ route('section.edit',$sec->id) }}">Editar</a>
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
    <a href="section/create" class="btn btn-primary" type="button">Registrar Nuevo de Detalles de Sección </a>
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
      "lengthMenu": [
        [5, 10, 50, -1],
        [5, 10, 50, "All"]
      ]
    });
  });
</script>
@stop