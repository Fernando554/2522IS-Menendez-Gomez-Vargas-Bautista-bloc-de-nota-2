@extends('Template.layout')
@section('titulo')
<h6 class="heading">PRIMER PARCIAL</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Apuntes</a></li>
      <li><a href="#">Parcial 1</a></li>
      <li><a href="#">proceso de diseño de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación.</a></li>
    </ul>
@endsection

@section('contenido')
<div class="content"> 
      <!-- ################################################################################################ -->
      <h1><b>Planificacion de dos niveles</b></h1>
      <h2><b>Concepto</b></h2>
      <p>En la planificacion de dos niveles se carga en la memoria principal cierto subconjunto de los proceso ejecutables.</p>
      <p>El planificador se restringe entonces a ese subconjunto durante cierto tiempo.</p>
      <p>Se eliminan de la memoria los procesos que hayan permanecido en ella lo suficiente y manda a cargar a memoria los proceso que hayan estado en disco demasiado tiempo.</p>
      <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <h2><b>Esquema operativo de un planificador de dos niveles</b></h2>
      <p>1.-Se carga en la memoria principal cierto subconjunto de los procesos ejecutables.</p>
      <p>2.-El planificador se restringe a ellos durante cierto tiempo.</p>
      <p>3.-Periódicamente se llama a un planificador de nivel superior para efectuar las siguientes tareas:</p>
                    <p>Eliminar de la memoria los procesos que hayan permanecido en ella el tiempo suficiente.</p>
                    <p>Cargar a memoria los procesos que hayan estado en disco demasiado tiempo.</p>
        <p>4.-El planificador de nivel inferior se restringe de nuevo a los procesos ejecutables que se encuentren en la memoria.</p>
      <p>5.-El planificador de nivel superior se encarga de desplazar los procesos de memoria a disco y viceversa.</p>
        <!-- ################################################################################################ -->
    </div>
@endsection