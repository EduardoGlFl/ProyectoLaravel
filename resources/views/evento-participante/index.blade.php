@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de participantes a eventos</h1>
@stop

@section('content')
<div class="card shadow my-4 border-0 mx-auto" >
            <div class="card-body">                             
              @if($errors->any())
                <div class="alert alert-danger">
                  @foreach($errors->all() as $error)
                    - {{ $error }} <br>
                  @endforeach
                </div>
              @endif
              <fo-rm action="{{route('participantes.store')}}" method="POST" class="row g-3">
                @csrf
                    <div class="col-md-8">
                      <label for="exampleDataList" class="form-label">Eventos: </label>
                      <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                      <datalist id="datalistOptions">
                        <option value="Simposium">
                        <option value="Simposium">
                        <option value="Simposium">
                        <option value="Simposium">
                        <option value="Chicago">
                      </datalist>
                    </div>
                  <div class="col-md-4">
                    <label class="form-label">Tipo de Participante:</label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                    <datalist id="datalistOptions">
                      <option value="San Francisco">
                      <option value="New York">
                      <option value="Seattle">
                      <option value="Los Angeles">
                      <option value="Chicago">
                    </datalist>
                  </div>
                  <div class="col-md-12">
                    <label class="form-label">Nombre del participante:</label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                    <datalist id="datalistOptions">
                      <option value="San Francisco">
                      <option value="New York">
                      <option value="Seattle">
                      <option value="Los Angeles">
                      <option value="Chicago">
                    </datalist>
                  </div>
                  <div class="col-md-12">
                    <label class="form-label">Institucion de procedencia:</label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                    <datalist id="datalistOptions">
                      <option value="San Francisco">
                      <option value="New York">
                      <option value="Seattle">
                      <option value="Los Angeles">
                      <option value="Chicago">
                    </datalist>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Documento: </label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                    <datalist id="datalistOptions">
                      <option value="San Francisco">
                      <option value="New York">
                      <option value="Seattle">
                      <option value="Los Angeles">
                      <option value="Chicago">
                    </datalist>
                  </div>
              </form>
            </div>
            <div class="d-grid gap-2 col-6">
              <button class="btn btn-primary" type="submit">Inscribir a evento</button>
            </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop