@extends('Template.layout')
@section('titulo')
<h6 class="heading">PRIMER PARCIAL</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Apuntes</a></li>
      <li><a href="#">Parcial 1</a></li>
      <li><a href="#">conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas.</a></li>
    </ul>
@endsection

@section('contenido')
<div class="content"> 
      <!-- ################################################################################################ -->
      <h1><b>conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas.</b></h1>
      <h2><b>Presentacion distribuida</b></h2>
      <p>La capa de presentación se encuentra distribuida entre el cliente y el servidor, de manera que en el cliente se modifica o adapta la presentación que ofrece el servidor. Este tipo de sistemas tienen un difícil mantenimiento.</p>
      <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <h2><b>Presentacion remota</b></h2>
      <p>La capa de presentación de datos, se ejecuta en el cliente totalmente. En ella se realizan las validaciones de los datos de entrada, el formateo de los de salida, etc. La lógica de negocio y el acceso a la base de datos se aloja en el servidor.</p>
      <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <h2><b>Logica o preceso distribuido</b></h2>
      <p>En este modelo, la capa que implementa la lógica de negocio se encuentra dividida entre el cliente y el servidor. El acceso a la base de datos se encuentra en el servidor y la capa de presentación en el cliente.</p>
      <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <h2><b>Base de datos remota</b></h2>
      <p>Las capas de negocio y de presentación se ejecutan completamente en el cliente, mientras que la base de datos está completamente en el servidor.</p>
      <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <h2><b>Base de datos distribuida</b></h2>
      <p>Las capas de negocio y de presentación se ejecutan completamente en el cliente, mientras que la base de datos está distribuida entre el cliente y el servidor. Se requieren de mecanismos para asegurar la coherencia en los datos.</p>
      <img src="../images/demo/arqui.png" alt="" width="600px" height="150px">
      <!-- ################################################################################################ -->
    </div>
@endsection