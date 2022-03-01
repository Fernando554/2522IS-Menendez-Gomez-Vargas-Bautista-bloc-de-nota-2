@extends('Template.layout')
@section('titulo')
<h6 class="heading">PRIMER PARCIAL</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Apuntes</a></li>
      <li><a href="#">Parcial 1</a></li>
      <li><a href="#">Tipos de servidores</a></li>
    </ul>
@endsection

@section('contenido')
<div class="content"> 
      <!-- ################################################################################################ -->
      <h1>Tipos de servidores</h1>
      <h2>Definicion</h2>
      <h2>Servidor</h2>
      <p>Un servidor es un conjunto de computadoras capaz de atender las peticiones de un cliente y devolverle una respuesta en concordancia. 
        Los servidores se pueden ejecutar en cualquier tipo de computadora, incluso en computadoras dedicadas a las cuales se les conoce individualmente
         como «el servidor». En la mayoría de los casos una misma computadora puede proveer múltiples servicios y tener varios servidores en funcionamiento.</p>
      <h2>Servidores:</h2>
      <p>Servidor de impresiones: controla una o más impresoras y acepta trabajos de impresión de otros clientes de la red, poniendo en cola los trabajos de impresión.</p>
      <p>Servidor de correo: almacena, envía, recibe, enruta y realiza otras operaciones relacionadas con email para los clientes de la red.</p>
      <p>Servidor de fax: almacena, envía, recibe, enruta y realiza otras funciones necesarias para la transmisión, la recepción y la distribución apropiadas de los fax.</p>
      <p>Servidor de la telefonía: realiza funciones relacionadas con la telefonía, como es la de contestador automático, almacenando los mensajes de voz, encaminando las llamadas y controlando también la red o el Internet.</p>
      <p>Servidor proxy: realiza un cierto tipo de funciones a nombre de otros clientes en la red para aumentar el funcionamiento de ciertas operaciones (p. ej., prefetching y depositar documentos u otros datos que se soliciten muy frecuentemente), también proporciona servicios de seguridad, o sea, incluye un cortafuegos.</p>
      <p>Servidor del acceso remoto (RAS): controla las líneas de módem de los monitores u otros canales de comunicación de la red para que las peticiones conecten con la red de una posición remota, responde llamadas telefónicas entrantes y reconoce la petición de la red.</p>
      <p>Servidor web: almacena documentos HTML, imágenes, archivos de texto, escrituras, y demás material Web compuesto por datos (conocidos colectivamente como contenido), y distribuye este contenido a clientes que la piden en la red.</p>
      <p>Servidor de base de datos: provee servicios de base de datos a otros programas u otras computadoras, como es definido por el modelo cliente-servidor. También puede hacer referencia a aquellas computadoras (servidores) dedicadas a ejecutar esos programas, prestando el servicio.</p>
      <p>Servidor de Seguridad: Tiene software especializado para detener intrusiones maliciosas, normalmente tienen antivirus, antispyware, antiadware, además de contar con cortafuegos redundantes de diversos niveles y/o capas para evitar ataques, los servidores de seguridad varían dependiendo de su utilización e importancia.</p>
      <!-- ################################################################################################ -->
    </div>
@endsection