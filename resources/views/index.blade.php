<!DOCTYPE html>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Sislaf</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/index/portada.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
          <li><i class="far fa-envelope rgtspace-5"></i> info@domain.com</li>
        </ul>
        <!-- ################################################################################################ -->
      </div>
      <div class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><a href="index.html"><i class="fas fa-home"></i></a></li>
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
        <h1><a href="index.html">5°cuatrimestre ing. software</a></h1>
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
              </li>
              <li><a class="drop" href="#">Parcial 2 Modelo Vista Controlador</a>
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
              <li><a href="pages/gallery.html">Gallery</a></li>
              <li><a href="pages/full-width.html">Lista de cotejo parcial uno</a></li>
              <li><a href="pages/sidebar-left.html">Lista de cotejo parcial dos</a></li>
              <li><a href="pages/sidebar-right.html">Lista de cotejo tercer parcial</a></li>
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
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h3 class="heading">5° cuatrimestre ing.software</h3>
      <p> 5° cuatrimestre ign.software es un blog hecho para poder visualizar diferentes apuntes sobre la materia programacion cliente-servidor</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Pharetra etiam</a></li>
          <li><a class="btn inverse" href="#">Saber mas</a></li>
        </ul>
      </footer>
    </article>
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
    <section id="introblocks">
      <ul class="nospace group btmspace-80">
        <li class="one_third first">
          <figure><a class="imgover" href="#"><img src="images/index/sistemasDigitales.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Sistemas Digitales</h6>
              <p>Sistema digital es cualquier sistema que pueda generar, procesar, transmitir o 
                almacenar señales mediante dígitos y que solo admite valores discretos, es decir,
                 que solo admite un conjunto limitado de números o valores.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/index/poo.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Introduccion Programacion Orientada a Objetos</h6>
              <p>Con la programación orientada a objetos se pretende agrupar el código encapsulándolo 
                y haciéndolo independiente, de manera que una modificación debida al crecimiento de la 
                aplicación solo afecte a unas pocas líneas.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/index/baseDeDatos.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Bases de datos</h6>
              <p>Una base de datos es una recopilación organizada de información o datos estructurados, 
                que normalmente se almacena de forma electrónica en un sistema informático. Normalmente,
                 una base de datos está controlada por un sistema de gestión de bases de datos (DBMS). 
                 En conjunto, los datos y el DBMS, junto con las aplicaciones asociadas a ellos, reciben 
                 el nombre de sistema de bases de datos, abreviado normalmente a simplemente base de datos.</p>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <hr class="btmspace-80">
    <!-- ################################################################################################ -->
    <section id="overview">
      <div class="sectiontitle">
        <p class="nospace font-xs">Universidad Politecnica de Tecamac</p>
        <p class="heading underline font-x2">MISION Y VISION</p>
      </div>
      <ul class="nospace group btmspace-80">
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-tape"></i></a>
              <h6 class="heading">MISION</h6>
            </div>
            <p>“Contribuir al crecimiento nacional, mediante la formación de profesionistas 
              de calidad, a través de competencias profesionales con innovación en la generación
               de tecnología; que permita resolver la problemática de las empresas, fomentar el bienestar 
               social, avivar los valores humanísticos y la conservación de la cultura ecológica.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-table-tennis"></i></a>
              <h6 class="heading">VISION</h6>
            </div>
            <p>
              “Ser un referente nacional, con reconocimiento internacional en educación superior
               basada en competencias profesionales con programas educativos de calidad que formen 
               técnica, ética y profesionalmente a sus egresados para la investigación, el 
               desarrollo tecnológico, la prevención del medio ambiente, la promoción de la 
               cultura y el aporte al desarrollo económico y social, en apego al compromiso de
                mejora continua y al cumplimiento del plan de desarrollo institucional en el año 
                2023.”</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-people-carry"></i></a>
              <h6 class="heading">OBJETIVOS DE CALIDAD</h6>
            </div>
            <p>Lograr el 85% de satisfacción de estudiante mediante la integración de los 
              resultados de la aplicación de los instrumentos diseñados para este fin de manera
               cuatrimestral.
              Impulsar el fortalecimiento académico dentro del proceso educativo 
              integrando actividades académicas, de investigación, extracurriculares, de extensión
               universitaria y de cultura emprendedora a través de un programa para cada una de 
               ellas.
              El resultado de aprendizaje, mediante la integración del 90% de portafolios de 
              evidencias, presentando uno de estos por cada asignatura involucrada en el proceso
               educativo.</p>
          </article>
        </li>
      </ul>
      <footer class="center"><a class="btn" href="#">Mattis vestibulum</a></footer>
    </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('images/index/sistemasDigitalesV2.png');">
  <section id="splitfifty" class="hoc container clear">
    <div class="sectiontitle">
      <p class="heading underline font-x2">Ingenieria en Software</p>
    </div>
    <div class="bgded clear" style="background-image:url('images/index/trabajo.jpeg');"> 
      <!-- ################################################################################################ -->
      <article>
        <h6 class="heading font-x2">Sistemas digitales</h6>
        <p>Se refieren a los sistemas que sean capaces de generar y transmitir señales por medio de dígitos que
           casi siempre están representados con el código binario.
          Actualmente, los sistemas digitales se encuentran incorporados en dispositivos magnéticos, electrónicos
           y mecánicos como calculadoras, balanzas electrónicas y otros instrumentos digitales de precisión como
            los smartphones.</p>
        <footer><a class="btn" href="#">Ver mas</a></footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">conoce mas sobre ellos</p>
      <p class="heading underline font-x2">creadores del blog</p>
    </div>
    <ul id="latest" class="nospace group">
      <li class="one_third first">
        <article><a class="imgover" href="#"><img src="images/demo/fernando_foto.png" alt=""></a>
          <ul class="nospace meta group">
            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="far fa-clock"></i>
              <time datetime="2045-04-06T08:15+00:00">20 de enero 2022</time>
            </li>
          </ul>
          <div class="excerpt">
            <h6 class="heading">Estudiante Vargas Bautista Fernando</h6>
            <p>Hola soy fernando vargas Bautista estudiante de ing.en software creador de este blog :V</p>
            <footer><a class="btn" href="#">Leer mas</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article><a class="imgover" href="#"><img src="images/demo/gaby_foto.png" alt=""></a>
          <ul class="nospace meta group">
            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="far fa-clock"></i>
              <time datetime="2045-04-05T08:15+00:00">05 Apr 2022</time>
            </li>
          </ul>
          <div class="excerpt">
            <h6 class="heading">Estudiante Gabriela Menendez Gomez</h6>
            <p>Hola! Me llamo Gaby y soy estudiante de Software :) .</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay row4" style="background-image:url('images/index/portada.png');">
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
        <h6 class="heading">VIdeo</h6>
        <ul class="nospace clear latestimg">
          <li><video src="images/video/videoChido.mp4" autoplay muted loop></video></li>
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
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></div>
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
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>