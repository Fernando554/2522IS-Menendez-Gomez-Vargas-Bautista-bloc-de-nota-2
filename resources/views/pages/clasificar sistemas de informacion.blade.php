@extends('Template.layout')
@section('titulo')
<h6 class="heading">PRIMER PARCIAL</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Apuntes</a></li>
      <li><a href="#">Parcial 1</a></li>
      <li><a href="#">Clasificacion de los sistemas de informacion de acuerdo con su arquitectura</a></li>
    </ul>
@endsection

@section('contenido')
<div class="content"> 
      <!-- ################################################################################################ -->
      <h1>CLasificacion de los sistemas de informacion de acuerdo a su arquitectura</h1>
      <img class="imgr borderedbox inspace-5" src="../images/demo/clasificacion.png" alt="">
      <h1>clasificacion)</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Los sistemas de dos niveles: archivo-servidor</th>
              <th>Los sistemas de dos niveles: cliente-servidor</th>
              <th>los sistemas muchos niveles</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Las funciones de servidor en este caso se limitan habitualmente por el almacenamiento de datos (es posible también el almacenamiento de archivos ejecutados), y el procesamiento de datos tiene lugar solamente de parte de cliente. El número de clientes está limitado a causa de imposibilidad de acceso simultáneo para grabar un archivo. Las fallas principales de tal sistema son: la ausencia de 
                integridad garantizada de la base de datos, el bajo nivel de protección, la baja productividad del sistema.</td>
              <td>donde todos los cálculos se realizan en el servidor con los medios del Sistema de Gestión de Bases de Datos bajo la protección del sistema operativo del servidor. Las fallas principales de tal tipo son la velocidad insuficiente de funcionamiento y la incapacidad de realizar los algoritmos complejos de cálculo. 
                Aquí también es necesario señalar númerosas decisiones donde el sistema en la realidad funciona como archivo — servidor a pesar de uso de los medios instrumentales cliente — servidor con todas las consecuencias negativas derivadas.</td>
              
                <td>donde las funciones de procesamiento de datos son pasados a uno o varios servidores especiales, lo que permite dividir las funciones de almacenamiento, de procesamiento y de presentación de datos para el uso más efectivo. En dicha 
                  etapa las realizaciones de tal clase son más convenientes para la realización de funcionalidad requerida.r</td>
            </tr>
              </thead>
            </thead>
          </tbody>
        </table>
      </div>
      <div id="comments">
        
      <!-- ################################################################################################ -->
    </div>
@endsection