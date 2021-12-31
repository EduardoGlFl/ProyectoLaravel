@extends('layouts.plantillabase')

@section('contenido')
    <a href="eventos/create" class="btn btn-primary">Crear</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Fecha de inicio</th>
          <th scope='col'>Fecha de termino</th>
          <th scope='col'>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($eventos as $evento)
          <tr>
            <td>{{$evento['id']}}</td>
            <td>{{$evento['nombre']}}</td>
            <td>{{$evento['descripcion']}}</td>
            <td>{{$evento['fechaInicio']}}</td>
            <td>{{$evento['fechaFin']}}</td>
            <td>
              <form action="{{route('eventos.destroy', $evento->id)}}" method="POST">
                <a class="btn btn-info" href="{{ route('eventos.edit',$evento->id) }}">Editar</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Borrar</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
@endsection