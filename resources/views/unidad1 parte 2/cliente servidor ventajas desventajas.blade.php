@extends('Template.layout')
@section('titulo')
<h6 class="heading">PRIMER PARCIAL</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Apuntes</a></li>
      <li><a href="#">Parcial 1</a></li>
      <li><a href="#">Cliente servidor Ventajas y desventajas</a></li>
    </ul>
@endsection

@section('contenido')
<div class="content"> 
      <!-- ################################################################################################ -->
      <h1>CLIENTE SERVIDOR VENTAJAS Y DESVENTAJAS<h1>
      
      <p>Centralización del control: Los accesos, recursos y la integridad de los datos son controlados por el servidor de forma que un programa cliente defectuoso o no autorizado no pueda dañar el sistema. Esta centralización también facilita la tarea de poner al día datos u otros recursos (mejor que en las redes P2P).</p>
      <p>Escalabilidad: Se puede aumentar la capacidad de clientes y servidores por separado. Cualquier elemento puede ser aumentado (o mejorado) en cualquier momento, o se pueden añadir nuevos nodos a la red (clientes y/o servidores).</p>
      <p>Fácil mantenimiento: Al estar distribuidas las funciones y responsabilidades entre varios ordenadores independientes, es posible reemplazar, reparar, actualizar, o incluso trasladar un servidor, mientras que sus clientes no se verán afectados por ese cambio (o se afectarán mínimamente). Esta independencia de los cambios también se conoce como encapsulación.</p>
      <p>Existen tecnologías, suficientemente desarrolladas, diseñadas para el paradigma de C/S que aseguran la seguridad en las transacciones, la amigabilidad del interfaz, y la facilidad de empleo.</p>
      <h2>DESVENTAJAS</h2>
      <p>La congestión del tráfico ha sido siempre un problema en el paradigma de C/S. Cuando una gran cantidad de clientes envían peticiones simultaneas al mismo servidor, puede ser que cause muchos problemas para éste (a mayor número de clientes, más problemas para el servidor). Al contrario, en las redes P2P como cada nodo en la red hace también de servidor, cuantos más nodos hay, mejor es el ancho de banda que se tiene.</p>
      <p>El paradigma de C/S clásico no tiene la robustez de una redP2P. Cuando un servidor está caído, las peticiones de los clientes no pueden ser satisfechas. En la mayor parte de redes P2P, los recursos están generalmente distribuidos en varios nodos de la red. Aunque algunos salgan o abandonen la descarga; otros pueden todavía acabar de descargar consiguiendo datos del resto de los nodos en la red.</p>
      <!-- ################################################################################################ -->
    </div>
@endsection