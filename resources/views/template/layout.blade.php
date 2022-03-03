<!DOCTYPE html>
<!--
Template Name: Sislaf
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Sislaf | Pages | Full Width</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/index/portada.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
          <li><i class="far fa-envelope rgtspace-5"></i> Ingenieros5543@outlock.com</li>
        </ul>
        <!-- ################################################################################################ -->
      </div>
      <div class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><a href="../index.html"><i class="fas fa-home"></i></a></li>
          <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
          <li><a href="#" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
          <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
          <li id="searchform">
            <div>
              <form action="#" method="post">
                <fieldset>
                  <legend>Quick Search:</legend>
                  <input type="text" placeholder="Enter search term&hellip;">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </fieldset>
              </form>
            </div>
          </li>
        </ul>
        <!-- ################################################################################################ -->
      </div>
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <!-- ################################################################################################ -->
        <h1><a href="{{route('inicio')}}">5°CUATRIMESTRE ING.SOFTWARE</a></h1>
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="clear">
          <li class="active"><a href="{{route('inicio')}}">Home</a></li>
          <li><a class="drop" href="#">Apuntes</a>
            <ul>
              <li><a class="drop" href="#">Parcial 1 Introduccion a la arquitectura cliente servidor</a>
                <ul>
                  <li><a href="{{route('apunte1')}}">Sistemas de informacion</a></li>
                  <li><a href="{{route('apunte2')}}">Evolucion de los sistemas de informacion</a></li>
                  <li><a href="{{route('apunte3')}}">Cliente Servidor</a></li>
                  <li><a href="{{route('apunte4')}}">Sistemas de Computadoras Centrales y Dedicadas</a></li>
                  <li><a href="{{route('apunte5')}}">Arquitecuta cliente servidor</a></li>
                  <li><a href="{{route('apunte6')}}">Protocolos de comunicacion en redes</a></li>
                  <li><a href="{{route('apunte7')}}">CLasificacion de los sistemas de informacion de acuerdo a su arquitectura</a></li>
                  <li><a href="{{route('apunte8')}}">Procesos de diagramacion de componentes de la arquitecura Cliente-Servidor</a></li>
                 </ul>
              </li>
              <li><a class="drop" href="#">Parcial 1 Componentes y caracteristicas del cliente servidor</a>
                <ul>
                  <li><a href="{{route('apunte9')}}">Componentes del modelo Cliente/Servidor.</a></li>
                  <li><a href="{{route('apunte10')}}">concepto de programa maestro</a></li>
                  <li><a href="{{route('apunte11')}}">Procesos y tareas del programa maestro.</a></li>
                  <li><a href="{{route('apunte17')}}">Tipos de servidores</a></li>
                  <li><a href="{{route('apunte12')}}">Caracteristicas de la arquitectura cliente servidor</a></li>
                  <li><a href="{{route('apunte13')}}">ventajas y desventajas de la arquitectura cliente servidor</a></li>
                  <li><a href="{{route('apunte14')}}">Concepto de computo en la nube</a></li>
                  <li><a href="{{route('apunte15')}}">Conceptos de Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS)</a></li>
                  <li><a href="{{route('apunte16')}}">Describir la arquitectura Cliente/Servidor con los modelos de cómputo en la nube IAAS, PAAS, SAAS.</a></li>
                </ul>
              </li>
              <li><a class="drop" href="#">Parcial 2 Estrategias de reparto de complejidad</a>
                <ul>
                  <li><a href="{{route('apunte18')}}">Concepto presentacion distribuida,presentacion remota, proceso distribuido y acceso a datos remotos</a></li>
                  <li><a href="{{route('apunte19')}}">Concepto de logica de acceso, presentacion y negocio a datos</a></li>
                  <li><a href="{{route('apunte20')}}">Proceso de diseño de logica de acceso de datos, logica de presentacion de datos y logica de negocio</a></li>
                  <li><a href="{{route('apunte21')}}">Proceso de desarrollo de logica de acceso a datos, logica de presentacion de datos y logica de negocio</a></li>
                 </ul>
              </li>
              <li><a class="drop" href="#">Parcial 2 Modelos multinivel</a>
                <ul>
                  <li><a href="{{route('apunte22')}}">Concepto de nivel vinculado a programacion web</a></li>
                  <li><a href="{{route('apunte23')}}">Proceso de planificacion en dos niveles</a></li>
                  <li><a href="{{route('apunte24')}}">Proceso de planificacion en tres niveles</a></li>
                  <li><a href="{{route('apunte25')}}">Proceso de planificacion multiniveles</a></li>
                  <li><a href="{{route('apunte26')}}">Identificar problemas de actuacion y mantenimiento de aplicaciones multinivel</a></li>
                 </ul>
              </li>
              <li><a class="drop" href="#">Parcial 2 Modelo Vista Controlador</a>
                <ul>
                  <li><a href="{{route('apunte27')}}">Concepto de modelo, control y vista</a></li>
                  <li><a href="{{route('apunte28')}}">concepto de Modelo VIsta Controlador(MVC)</a></li>
                  <li><a href="{{route('apunte29')}}">Proceso de flujo de control a partir del MVC</a></li>
                  <li><a href="{{route('apunte30')}}">Desarrollo de software a partir del MVC</a></li>
                 </ul>
              </li>
              <li><a class="drop" href="#">Parcial 2 Sockets</a>
                <ul>
                  <li><a href="{{route('apunte27')}}">Concepto de modelo, control y vista</a></li>
                  <li><a href="{{route('apunte28')}}">concepto de Modelo VIsta Controlador(MVC)</a></li>
                  <li><a href="{{route('apunte29')}}">Proceso de flujo de control a partir del MVC</a></li>
                  <li><a href="{{route('apunte30')}}">Desarrollo de software a partir del MVC</a></li>
                 </ul>
              </li>
              <li><a class="drop" href="#">Parcial 3</a>
               <ul>
                 <li><a href="#">apunte.......</a></li>
                 <li><a href="#">apunte2.......</a></li>
                 <li><a href="#">apunte3......</a></li>
               </ul>
               
              </li>
            </ul>
          </li>
          <li><a class="drop" href="#">Listas de cotejo</a>
            <ul>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="full-width.html">Lista de cotejo parcial uno</a></li>
              <li><a href="sidebar-left.html">Lista de cotejo parcial dos</a></li>
              <li><a href="sidebar-right.html">Lista de cotejo tercer parcial</a></li>
            </ul>
          </li>
        </ul>
        <!-- ################################################################################################ -->
      </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    @yield('titulo')
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    @yield('contenido')

    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay row4" style="background-image:url('../images/index/portada.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h6 class="heading">5°CUATRIMESTRE ING.SOFTWARE</h6>
      <ul class="faico clear">
        <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
      <p class="nospace">Nuestras redes sociales.</p>
    </div>
    <!-- ################################################################################################ -->
    <hr class="btmspace-50">
    <!-- ################################################################################################ -->
    <div class="group btmspace-50">
      <div class="one_quarter first">
        <h6 class="heading">suscribirte</h6>
        <p class="nospace btmspace-15"> Si deseas recibir notificaciones de los proximos apuntes poner su nombre y correo.</p>
        <form method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" placeholder="Name">
            <input class="btmspace-15" type="text" value="" placeholder="Email">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Notas de los autores</h6>
        <ul class="nospace linklist">
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="#">Se agregaron algunos apuntes al apartado de primer Parcial.</a></p>
              <time class="block font-xs" datetime="2045-04-06">Viernes, 21<sup>th</sup> Enero 2022</time>
            </article>
          </li>
          <li>
            <article>
              <p class="nospace btmspace-10"><a href="#">Se agrego el apartado rubricas donde se encontraran los proyectos de las mismas.</a></p>
              <time class="block font-xs" datetime="2045-04-05">Domingo, 22<sup>th</sup> Enero 2022</time>
            </article>
          </li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Video</h6>
        <ul class="nospace clear latestimg">
          <li><video src="../images/video/videoChido.mp4" autoplay muted loop></video></li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <div id="ctdetails" class="clear">
      <ul class="nospace clear">
        <li class="one_quarter first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> Ingenieros5543@outlock.com</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Monday - Saturday:</strong> 08.00am - 18.00pm</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span></div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">5° cuatrimestre ing. software</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>