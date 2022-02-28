@extends('Template.layout')
@section('titulo')
<h6 class="heading">PRIMER PARCIAL</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Apuntes</a></li>
      <li><a href="#">Parcial 1</a></li>
      <li><a href="#">IAAS PAAS Y SAAS</a></li>
    </ul>
@endsection

@section('contenido')
<div class="content"> 
      <!-- ################################################################################################ -->
      <h1>IAAS PAAS Y SAAS</h1>
      <h2>DEFINICION</h2>
      <p>El mercado ofrece hoy día una gran variedad en cada uno de estos servicios, facilitando a los usuarios la búsqueda de cúal es el más apropiado para sus necesidades. Grandes empresas de la informática como Microsoft, Amazon o Google no son ajenas a este hecho y ofrecen algunos de los mejores servicios IaaS, PaaS y SaaS.</p>
      <p>Gracias a estos servicios, las empresas están evitando realizar grandes inversiones tanto en software como en hardware. Además, obtienen múltiples ventajas de tener todas sus aplicaciones en la nube, permitiendo a sus empleados poder acceder a ellas desde cualquier dispositivo en cualquier lugar y a cualquier horario.</p>
      <h3>QUE ES IAAS</h3>
      <p>Cuando nos referimos a IaaS, estamos hablando de infraestructuras como servicio. Las empresas contratan la infraestructura de hardware a un tercero a cambio de una cuota o alquiler. La contratación de este hardware permite elegir la capacidad de proceso (procesadores), la memoria a utilizar (memoria RAM) y el espacio de almacenamiento (disco duro).</p>
      <p>EJEMPLOS<p>
        <p>Amazon Web Services: el proveedor de servicios en la nube de Amazon es un claro ejemplo de IaaS. Con su servicio central Amazon EC2, permite a los usuarios alquilar servidores virtuales en los cuales instalar sus aplicaciones. EC2 ofrece configuraciones de hardware que pueden ser contratadas por los clientes. En estas configuraciones, llamadas tipos de instancias, se puede elegir entre una variedad de CPUs, memoria RAM, almacenamiento en disco duro y capacidad de transferencia de red. Además ofrece otros servicios anexos, como contratación de cortafuegos, direcciones IPv4 estáticas y redes virtuales independientes.</p>
      <h4>QUE ES PAAS</h4>
      <p>El servicio PaaS ofrece plataformas como servicios. En estas plataformas se pueden lanzar aplicaciones como bases de datos, middleware, herramientas de desarrollo, servicios de inteligencia empresarial, etc.

Este tipo de servicios es el ideal para los desarrolladores que sólo quieran centrarse en la implementación y administración de sus aplicaciones. Al no tener que preocuparse por los recursos de hardware y software (sistemas operativo), mejoran su eficacia, centrándose sólo en la parte que les interesa.</p>
      <p>EJEMPLO</p>
      <p>Google App Engine: este servicio de Google está enfocado a que el cliente pueda publicar aplicaciones web online, sin tener que preocuparse por la infraestructura donde hacerlo. Así, el cliente se enfoca solamente en la construcción y configuración de sus aplicaciones, siendo Google la encargada de aprovisionar de los recursos necesarios. Google App Engine cuenta con un nivelador de carga, que va aumentando los recursos necesarios según necesiten las aplicaciones, por lo que no es necesario preocuparse por la escalabilidad.</p>

      <h5>QUE ES SAAS</h5>
      <p>Este modelo de software como infraestructura, aloja el software de la empresa, así como sus datos, en servidores externos a la misma, y paga una cuota por su utilización. Cualquier empleado de una empresa podrá acceder desde cualquier lugara las aplicaciones de la empresa sin necesidad de instalarlas en un equipo local. Cuando hablamos de software en la nube estamos hablando de SaaS.

Con un SaaS la preocupación de la empresa será sólo cómo utilizar los programas de software necesarios para su funcionamiento, olvidándose del resto de recursos. El hardware requerido, sistemas operativos, aplicaciones, etc. son provistas por el proveedor del servicio que, además, se encarga de mantenerlas funcionando correctamente y actualizadas.</p>

        <p>EJEMPLO</p>
        <p>WordPress: la instalación de WordPress en un servidor para diseñar una página web, da como resultado un sitio o página web que es accesible para los usuarios desde cualquier dispositivo, a través de internet. WordPress es un software que se está ejecutando en un servidor remoto donde el usuario interactúa con él sin tener nada que ver con la infraestructura necesaria para su funcionamiento.</p>

        <p>DIFERENCIAS</p>
        <p>Dependiendo de las necesidades de las empresas o los profesionales, puede ser más atractivo un modelo IaaS, PaaS o SaaS. Hay que tener en cuenta que la plataforma como servicio y el software como servicio están montado sobre una infraestructura como servicio, ya que en ambas el usuario se desentiende de todo lo relacionado con la infraestructura (instalación, costes, mantenimiento, etc.).

La diferencia fundamental entre estos tres tipos de plataformas viene dada por el tipo de mantenimiento y soporte que ofrezca el proveedor del servicio. Por ejemplo, en una plataforma IaaS el usuario tiene acceso al software instalado y su configuración, cosa que los usuarios de un servicio Saas no tienen. En cambio un servicio PaaS sólo tiene acceso al software que forme la plataforma de desarrollo a utilizar.</p>
<!-- ################################################################################################ -->
    </div>
@endsection