@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de participantes a eventos</h1>
@stop

@section('content')
  <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
    <select class="form-select" id="inputGroupSelect01">
      <option selected>Choose...</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>

  <div class="input-group mb-3">
    <select class="form-select" id="inputGroupSelect02">
      <option selected>Choose...</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    <label class="input-group-text" for="inputGroupSelect02">Options</label>
  </div>

  <div class="input-group mb-3">
    <button class="btn btn-outline-secondary" type="button">Button</button>
    <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
      <option selected>Choose...</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>

  <div class="input-group">
    <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
      <option selected>Choose...</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    <button class="btn btn-outline-secondary" type="button">Button</button>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop