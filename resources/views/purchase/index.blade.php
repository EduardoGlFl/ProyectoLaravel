@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center">Compras</h1>
@stop

@section('content')
<table class="table table-striped" style="width:100%">
  <thead>
    <tr>
      <!-- {{-- <th scope="col">#</th> --}} -->
      <th scope="col">#</th>
      <th scope="col">Pagado Status</th>
      <th scope="col">Fecha</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Iva</th>
      <th scope="col">Total</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
    @foreach($purchaseDetails as $key => $purchase)
    <tr>


      <th scope="row">{{$key + 1}}</th>
      <td>{{$va = $purchase['ndetail']}}</td>
      @if($purchase['pagado'] == 1)
      <td>Pagado</td>
      @else
      <td>No Pagado</td>
      @endif

      <td>{{$purchase['fechaHora']}}</td>
      <td>$ {{$purchase['subtotal']}} MX</td>
      <td>$ {{$purchase['iva']}} MX</td>
      <td>$ {{$purchase['total']}} MX</td>

      <td>
        <!-- <form action="{{route('purchase.destroy', $purchase->id)}}" method="POST"> -->
        <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><i class="fas fa-info-circle"></i>
          Detalles Compra           
        </button> -->
        <a class="btn btn-info"  href="{{route('purchasedetails.show', $purchase['ndetail'])}}"data-toggle="modal" data-target="#myModal"><i class="fas fa-info-circle"></i>
          <!-- <a class="btn btn-info"  href="purchasedetails/{{$purchase['ndetail']}}" ><i class="fas fa-info-circle"></i> -->
          Detalles Compra</a>       
        @csrf
        <!-- @method('DELETE') -->
        <!-- <button class="btn btn-danger" onclick="return confirm('¿Desea eliminar?...')">Borrar</button> -->
        <!-- </form> -->
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
<div class="row justify-content-md-center">
  <!-- <div class=" col-md-auto">
    <a href="ticket/create" class="btn btn-primary" type="button">Registrar Nuevo Ticket</a>
  </div> -->

</div>


<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">

    <div class="modal-header">

      <h5 class="modal-title"><i class="fas fa-info-circle"></i> Detalles Compra </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

    </div>
    <div class="modal-body">



      <div class="container-fluid">
       
        
        <iframe width='100%' height='250' src="{{route('purchasedetails.show', $purchase['ndetail'])}}"></iframe>


      </div>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>

  </div>
</div>
</div>
<script type="text/javascript">
          $("#myModal").on("show.bs.modal", function(e) {
            var link = $(e.relatedTarget);
            $(this).find(".modal-body");
          });
        </script>

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
    $('#purchase').DataTable({
      "lengthMenu": [
        [5, 10, 50, -1],
        [5, 10, 50, "All"]
      ]
    });
  });
</script>
@stop