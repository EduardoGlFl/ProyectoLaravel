@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center">Tickets</h1>
@stop

@section('content')
<table  id="ticket"class="table table-striped" style="width:100%">
  <thead>
    <tr>
      <!-- {{-- <th scope="col">#</th> --}} -->
      <th scope="col">ID</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tickets as $ticket)
    <tr>
      

      <td>{{$ticket['id']}}</td>
      <td>{{$ticket['descripcion']}}</td>
      <td>$ {{$ticket['precio']}} MX</td>
      
      <td>
        <form action="{{route('ticket.destroy', $ticket->id)}}" method="POST">
          <a class="btn btn-info" href="{{ route('ticket.edit',$ticket->id) }}">Editar</a>
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
    <a href="ticket/create" class="btn btn-primary" type="button">Registrar Nuevo Ticket</a>
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
    $('#ticket').DataTable({
      "lengthMenu": [
        [5, 10, 50, -1],
        [5, 10, 50, "All"]
      ]
    });
  });
</script>
@stop