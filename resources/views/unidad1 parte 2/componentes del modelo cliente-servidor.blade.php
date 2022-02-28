@extends('Template.layout')
@section('titulo')
<h6 class="heading">PRIMER PARCIAL</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Apuntes</a></li>
      <li><a href="#">Parcial 1</a></li>
      <li><a href="#">Arquitectura cliente servidor</a></li>
    </ul>
@endsection

@section('contenido')
<div class="content"> 
      <!-- ################################################################################################ -->
      <h1>Componentes del modelo cliente-servidor</h1>
      <p>Red:Una red es el conjunto de clientes, servidores y bases de datos unidos de una manera fisica o no fisica
        en el que existen protocolos de transmision de informacion establecidos.</p>
        <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <p>Cliente:El concepto cliente hace referencia a un demantande de servicios, este cliente puede ser un ordenador como tambien una
        aplicacion de informatica, la cual requiere informacion proveniente de la red para funcionar</p>
        <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <p>Servidor:Un servidor hace referencia a un proveedor de servicios, este servidor a su vez 
        puede ser un ordenador o una aplicación informática la cual envía información a los demás agentes de la red.</p>
        <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <p>Protocolo: Un protocolo es un conjunto de normas o reglas y pasos establecidos de manera clara y concreta sobre el flujo de información en una red estructurada.</p>
      <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <p>Servicios: Un servicio es un conjunto de información que busca responder las necesidades de un cliente, donde esta información pueden ser mail, música, mensajes 
        simples entre software, videos, etc.</p>
        <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <p>Base de datos: Son bancos de información ordenada, categorizada y clasificada que forman parte de la red, que son sitios de almacenaje para la utilización de los servidores y 
        también directamente de los clientes.</p>
        <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <!-- ################################################################################################ -->
    </div>
@endsection