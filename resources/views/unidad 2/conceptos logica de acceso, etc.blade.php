@extends('Template.layout')
@section('titulo')
<h6 class="heading">PRIMER PARCIAL</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Apuntes</a></li>
      <li><a href="#">Parcial 1</a></li>
      <li><a href="#">conceptos de lógica de acceso, presentación y negocio a datos</a></li>
    </ul>
@endsection

@section('contenido')
<div class="content"> 
      <!-- ################################################################################################ -->
      <h1>conceptos de lógica de acceso, presentación y negocio a datos</h1>
      <h2><b>Logica de datos</b></h2>
      <p>En este conjunto entran los procesos encargados de la gestión de los datos propiamente dicha,
es decir, los procesos encargados del mantenimiento de los datos, de garantizar las reglas de
integridad referencial establecidas, así como de la gestión de las transacciones. Estas tareas
son realizadas, generalmente, por un Sistema de Gestión de Bases de Datos Relacionales,
como SQL Server, Oracle, MySQL, Informix, etc.</p>
        <h2><b>Logica de negocio</b></h2>
        <p>Es la lógica de la aplicación que controla la secuencia de acciones y fuerza el cumplimiento de
las reglas del negocio propias de cada empresa; además, asegura la integridad de las
transacciones de las operaciones necesarias que haya que realizar para que se cumplan
dichas reglas. La lógica del negocio también transforma una serie de datos en información útil
para el usuario mediante la aplicación de las reglas apropiadas.
</p>
        <h2><b>Logica de presentacion</b></h2>
        <p>Esta lógica es la responsable del control de todos los aspectos relacionados con la interacción
entre el usuario y la aplicación. Para llevar a cabo esta tarea de control, es necesario conocer
qué tipos de usuarios utilizarán la aplicación, qué actividades tienen que realizar y, teniendo en
cuenta estos datos, cuáles son los mejores estilos de interfaz para que esos usuarios realicen
sus tareas. En esta lógica se engloban todas las tareas que deben ser realizadas por la parte
Cliente del modelo general.
</p>
      <!-- ################################################################################################ -->
    </div>
@endsection