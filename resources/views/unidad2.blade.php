@extends('Template.layout')

@section('titulo')
<h6 class="heading">Segundo parcial {!! $Nombre !!}</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Apuntes</a></li>
      <li><a href="#">{!! $Nombre !!}</a></li>
    </ul>
@endsection

@section('cuerpo')
  {!! $Contenido !!}
@endsection