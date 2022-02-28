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
      <h1>Sistemas con arquitectura Cliente-servidor</h1>
      <h2>Definicion</h2>
      <p>La arquitectura cliente-servidor es un modelo de diseño de software en el que las tareas se reparten entre los proveedores de recursos o servicios llamados servidores y los demandantes llamados clientes.</p>
      <p>Esta idea se puede aplicar a programas que se ejecutan sobre una sola compuadora es mas ventajoso en un sistema operativo multiusuarios distribuida a traves de una red de computadoras es mas ventajosa en un sistema operativo multiusuario distribuidos a traves de una red de computadoras.</p>
      <h3>Partes que componen el sistema</h3>
      <img class="imgl borderedbox inspace-5" src="../images/demo/arqui.png" alt="">
      <p>Cliente: Programa ejecutable que participa activamente en el establecimiento de las conexiones. Envía una petición al servidor y se queda esperando por una respuesta. Su tiempo de vida es finito una vez que son servidas sus solicitudes, termina el trabajo..</p>
      <p>Servidor: Es un programa que ofrece un servicio que se puede obtener en una red. Acepta la petición desde la red, realiza el servicio y devuelve el resultado al solicitante. Al ser posible implantarlo como aplicaciones de programas, puede ejecutarse en cualquier sistema donde exista TCP/IP y junto con otros programas de aplicación.</p>
      <p>Portortornec condimenterdum eget consectetuer condis consequam pretium pellus sed mauris enim. Puruselit mauris nulla hendimentesque elit semper nam a sapien urna sempus.</p>
      <img class="imgr borderedbox inspace-5" src="../images/demo/clasificacionarqui.png" alt="">
      <h3>Clasificacion de los servidores </h3>
      <p>1.- Servidores con estado.</p>
      <p>2.- Servidores sin estado</p>
      <p>3.- Servidores concurrentes</p>
      <h3>Caracteristicas</h3>
      <p>--Combinación de un cliente que interactúa con el usuario, y un servidor que interactúa con los recursos a compartir. El proceso del cliente proporciona la interfaz entre el usuario y el resto del sistema. El proceso del servidor actúa como un motor de software que maneja recursos compartidos tales como bases de datos, impresoras, Módem, etc.</p>
      <p>--Las tareas del cliente y del servidor tienen diferentes requerimientos en cuanto a recursos de cómputo como velocidad del procesador, memoria, velocidad y capacidades del disco e input-output devices.</p>
      <p-->Se establece una relación entre procesos distintos, los cuales pueden ser ejecutados en la misma máquina o en máquinas diferentes distribuidas a lo largo de la red.</p>
      <!-- ################################################################################################ -->
    </div>
@endsection