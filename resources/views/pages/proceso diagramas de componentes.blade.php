@extends('Template.layout')
@section('titulo')
<h6 class="heading">PRIMER PARCIAL</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Apuntes</a></li>
      <li><a href="#">Parcial 1</a></li>
      <li><a href="#">Procesos de diagramacion de componentes de la arquitecura Cliente-Servidor</a></li>
    </ul>
@endsection

@section('contenido')
<div class="content"> 
      <!-- ################################################################################################ -->
      <h1>Procesos de diagramacion de componentes de la arquitecura Cliente-Servidor</h1>
      <h1>Table(s)</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Componente</th>
              <th>Definicion</th>
              <th>Imagen</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Notacion de componentes</td>
              <td>Es representada a traves de un rectangulo que tiene, a su vez, dos rectangulos a la izquierda</td>
              <td><img class="imgr borderedbox inspace-5" src="../images/demo/componene.png" alt=""></td>
            </tr>
            <tr>
              <td>Otra notacion de componentes</td>
              <td>Otra notación, utilizada en las últimas versiones de UML consiste en un 
                rectángulo con un rectángulo más pequeño en la esquina superior derecha con pestañas.</td>
              <td><img class="imgr borderedbox inspace-5" src="../images/demo/notacionComponente.png" alt=""></td>
            </tr>
              </thead>
            </thead>
          </tbody>
          <tbody>
            <tr>
              <td>Paquete con varios componentes</td>
              <td>También es posible utilizar el diagrama de paquetes para hacer un conjunto de varios módulos.
                 Con esto se consigue representar la unión de esos módulos para un fin concreto</td>
              <td><img class="imgr borderedbox inspace-5" src="../images/demo/paqueteComponentes.png" alt=""></td>
              
            </tr>
            <tr>
              <td>Ejemplos de componentes</td>
              <td>Ejemplos de componentes podrían ser los siguientes: Gestión de E/S, Animal, Persona, Gestión de incidencias, Gestor de workflow,… Como ves son conceptos muy amplios y 
                que pueden ser más o menos específicos dependiendo de la profundidad que se puede dar al diagrama.</td>
              <td><img class="imgr borderedbox inspace-5" src="../images/demo/paqueteComponentes.png" alt=""></td>

            </tr>
              </thead>
            </thead>
          </tbody>
        </table>
      </div>
      <h1>Como hacer un diagrama de componentes</h1>
      <p>Paso 1: averiguar el propósito del diagrama e identificar los artefactos como los archivos, documentos, etc. de su sistema o aplicación que necesita representar en su diagrama.</p>
      <p>Paso 2: A medida que averigüe las relaciones entre los elementos que identificó anteriormente, cree una disposición mental de su diagrama de componentes</p>
      <p>Paso 3: A medida que dibujas el diagrama, agrega componentes primero, agrupándolos dentro de otros componentes como te parezca conveniente</p>
      <p>Paso 4: El siguiente paso es añadir otros elementos como interfaces, clases, objetos, dependencias, etc. a su diagrama de componentes y completarlo.</p>
      <p>Paso 5: Puede adjuntar notas sobre diferentes partes de su diagrama de componentes para aclarar ciertos detalles a otros.</p>
      <div id="comments">
        
      <!-- ################################################################################################ -->
    </div>
@endsection