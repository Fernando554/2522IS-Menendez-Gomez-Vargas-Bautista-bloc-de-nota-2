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
      <h1><b>Planificacion en tres niveles</b></h1>
      <h2><b>Planificación a largo plazo o estratégica</b></h2>
      <p>Lo que muchos llaman el «Big Picture». Es en realizad el objetivo último de la organización. Define los objetivos que desea alcanzar tu organización en un plazo relativamente largo. 
          Los tiempos varían en base a muchos factores, pero normalmente se hacen planificaciones de este tipo a un año vista.</p>
        <h2><b>Planificación a medio plazo o ejecutiva</b></h2>
        <p>Es quizás la planificación que más tiende a olvidarse en las organizaciones. En esta planificación se atacan las fases intermedias que deberemos acometer para la consecución de los objetivos definidos en la planificación estratégica.
             Lo normal es que sean planificaciones mensuales o trimestrales.</p>
             <p>Es evidente que este nivel de planificación admite subniveles. Se puede hacer una planificación trimestral y dentro de esta una planificación trimestral, pero no es recomendable bajar mucho más abajo o perderemos 
                 el foco e invadiremos el siguiente nivel de planificación.</p>
        <h2><b>Planificación a corto plazo u operativa</b></h2>
        <p>Es la planificación que todos llevamos a cabo en nuestro día a día. Todos tenemos una agenda, listas de tareas, sabemos más o menos a que se están dedicando nuestros compañeros de trabajo en el día o a lo que se van a dedicar mañana. Es una planificación que 
            funciona muy bien con las metodologías ágiles de trabajo tipo SCRUM o XP . </p>
        <p>Este nivel de planificación es relativamente fácil de aplicar, muy efectivo para la ejecución de tareas diarias y que proporciona una gran sensación de avance, pero nunca es suficiente para que la organización funcione correctamente. Normalmente tendrá dos subniveles de planificación: un nivel diario en el que planificaremos que vamos a hacer a lo largo del día o al día siguiente y un nivel semanal que nos permitirá ajustar nuestras tareas diarias a un contexto.</p>
        <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <!-- ################################################################################################ -->
    </div>
@endsection