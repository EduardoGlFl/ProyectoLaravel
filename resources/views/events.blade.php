<h1> Registro de Eventos </h1>

<table border="1">
  <tr>
    <td>Id</td>
    <td>Nombre</td>
    <td>Descripcion</td>
    <td>Fecha de inicio</td>
    <td>Fecha de termino</td>
  </tr>
  @foreach($eventos as $evento)
  <tr>
    <td>{{$evento['id']}}</td>
    <td>{{$evento['nombre']}}</td>
    <td>{{$evento['descripcion']}}</td>
    <td>{{$evento['fechaInicio']}}</td>
    <td>{{$evento['fechaFin']}}</td>
  </tr>
  @endforeach
</table>