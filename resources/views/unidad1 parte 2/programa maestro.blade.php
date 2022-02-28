@extends('Template.layout')
@section('titulo')
<h6 class="heading">PRIMER PARCIAL</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Apuntes</a></li>
      <li><a href="#">Parcial 1</a></li>
      <li><a href="#">Programa maestro</a></li>
    </ul>
@endsection

@section('contenido')
<div class="content"> 
      <!-- ################################################################################################ -->
      <h1>Programa maestro</h1>
      <h2>¿Que es?</h2>
      <p>El Programa Maestro de Producción, conocido como Programa maestro o MPS -en inglés Master production Schedule- es un programa que muestra qué productos 
        se fabricarán y especifica en qué cantidades se hará durante un período de tiempo.</p>
        <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
        <p>Se trata de un programa generado a partir de la desagregación de la planificación de la producción agregada, que se encargará de guiar las acciones de 
          producción a lo largo de aproximadamente 6 a 12 meses normalmente sobre una base semanal, teniendo en cuenta los pedidos existentes.</p>
          <p>El plan maestro de producción es un programa que contiene todo lo que se va a producir y cuándo se va a producir.</p>
          <p>se definen las fechas de entrega de cada producto y se analiza cuántas unidades se pueden fabricar en un intervalo de tiempo determinado.
Esto mantiene el orden y la organización operativa de toda la cadena de producción.</p>
          <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <!-- ################################################################################################ -->
    </div>
@endsection