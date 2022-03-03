<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class publicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $temasu1 = [ 'Unidad 1 Componentes del modelo cliente servidor',
        'concepto de programa maestro','Procesos y tareas del programa maestro.',
        'Tipos de servidores',
        'Reconocer las características de la arquitectura Cliente/Servidor: servicios',
        'recursos compartidos',
        'protocolos asimétricos, independencia de la ubicación',
        'compatibilidad de clientes y servidores, comunicación de mensajes',
        'encapsulación de servicios, escalabilidad e integridad.',
        'Identificar las ventajas y desventajas de la arquitectura Cliente/Servidor','Definir el concepto de cómputo en la nube.','Definir los conceptos de Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS).',
        'Describir la arquitectura Cliente/Servidor con los modelos de cómputo en la nube IAAS, PAAS, SAAS.'
    ];

    $tituloeditu1 = [
        //Segundo titulo del tema
        "<h1>Unidad 1: Componentes del modelo cliente servidor</h1>
        <ul><li>Unidad 1</li></ul>",
        //Segundo titulo del tema
        "<h1>Unidad 1: concepto de programa maestro</h1>
        <ul><li>Unidad 1</li></ul>",
        //tercer titulo del tema
        "<h1>Unidad 1: Procesos y tareas del programa maestro.</h1>
        <ul><li>Unidad 1</li></ul>",
        //cuerto titulo del tema
        "<h1>Unidad 1: Tipos de servidores</h1>
        <ul><li>Unidad 1</li></ul>",
        //Quinto titulo del tema
        "<h1>Unidad 1: Caracteristicas de la arquitectura cliente servidor: servicios, recursos compartidos, protocolos asimétricos, independencia de la ubicación, compatibilidad de clientes y servidores, comunicación de mensajes, encapsulación de servicios, escalabilidad e integridad.</h1>
        <ul><li>Unidad 1</li></ul>",
        //sexto titulo del tema
        "<h1>Unidad 1: ventajas y desventajas de la arquitectura cliente servidor</h1>
        <ul><li>Unidad 1</li></ul>",
        //septimo titulo del tema
        "<h1>Unidad 1: Definir el concepto de cómputo en la nube.</h1>
        <ul><li>Unidad 1</li></ul>",
        //octavo titulo del tema
        "<h1>Unidad 1: Definir los conceptos de Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS).</h1>
        <ul><li>Unidad 1</li></ul>",
        //noveno titulo del tema
        "<h1>Unidad 1: Describir la arquitectura Cliente/Servidor con los modelos de cómputo en la nube IAAS, PAAS, SAAS</h1>
        <ul><li>Unidad 1</li></ul>",
    ];

    $contenidoedit = [
        //primer
        "<p>Red:Una red es el conjunto de clientes, servidores y bases de datos unidos de una manera fisica o no fisica
        en el que existen protocolos de transmision de informacion establecidos.
        Cliente:El concepto cliente hace referencia a un demantande de servicios, este cliente puede ser un ordenador como tambien una
        aplicacion de informatica, la cual requiere informacion proveniente de la red para funcionar
        Servidor:Un servidor hace referencia a un proveedor de servicios, este servidor a su vez 
        puede ser un ordenador o una aplicación informática la cual envía información a los demás agentes de la red.
        Protocolo: Un protocolo es un conjunto de normas o reglas y pasos establecidos de manera clara y concreta sobre el 
        flujo de información en una red estructurada.</p>",

        //2
      "<h2>¿Que es?</h2>
      <p>El Programa Maestro de Producción, conocido como Programa maestro o MPS -en inglés Master production Schedule- es
       un programa que muestra qué productos 
        se fabricarán y especifica en qué cantidades se hará durante un período de tiempo.
        Se trata de un programa generado a partir de la desagregación de la planificación de la producción agregada, que 
        se encargará de guiar las acciones de 
          producción a lo largo de aproximadamente 6 a 12 meses normalmente sobre una base semanal, teniendo en cuenta los 
          pedidos existentes.
        El plan maestro de producción es un programa que contiene todo lo que se va a producir y cuándo se va a producir.
        se definen las fechas de entrega de cada producto y se analiza cuántas unidades se pueden fabricar en un intervalo de 
        tiempo determinado.
        Esto mantiene el orden y la organización operativa de toda la cadena de producción.</p>
        <img src='../images/u1p2/MPS.png' class='img-fluid'>",

        //3
        "<h2>Elementos del programa maestro</h2>
        <img src='../images/u1p2/MPS2.png' class='img-fluid'>
<p>Proceso para realizar el programa maestro de produccion
Para realizar un PMP hay que partir de la demanda, ya sea pronosticad y/o basada en los pedidos de los clientes. Una vez que 
se tengan esos datos, hay que comenzar a elaborar 
  un plan que se ajuste a los definido en el Plan Agregado. Hay algunos aspectos que se deben considerar:
  • Necesidades de entrega de los clientes
  • Los niveles de capacidad y los de producción tienen que estar ajustados
  • Definir los niveles de inventario
  • Ajustar los planes a la estrategia de producción de la empresa
  • Todos estos aspectos deben ajustarse al sistema de manufactura de la empresa. 
  Cada entorno de producción requiere una elaboración distinta del MPS.
  El plan tiene que ser realista, sin pensar que se puede cubrir la demanda en plazos imposibles. 
  Es fundamental conocer los recursos de la planta para no errar en la planificación.
  Normalmente, primero se desarrolla un borrador del Plan para determinar que cantidades de producto son alcanzables en el 
  plazo de entrega establecido.
  Igualmente, es necesario conocer las necesidades de entrega de los clientes y ver cómo ajustar los niveles de capacidad con 
  los de producción. Además, hay que determinar los inventarios.
  En el caso de que se produzca una sobrecarga en la capacidad de producción, el plan tiene que revisarse para ajustar las 
  prioridades o para volver a calcular los plazos de entrega.</p>",    

        //4
      "<h2>Servidor</h2>
      <p>Un servidor es un conjunto de computadoras capaz de atender las peticiones de un cliente y devolverle una respuesta en 
      concordancia. 
        Los servidores se pueden ejecutar en cualquier tipo de computadora, incluso en computadoras dedicadas a las cuales se 
        les conoce individualmente
         como «el servidor». En la mayoría de los casos una misma computadora puede proveer múltiples servicios y tener varios
          servidores en funcionamiento.</p>
         <img src='../images/u1p2/tipoServidor.png' class='img-fluid'>
         <h2>Servidores:</h2>
      <p>Servidor de impresiones: controla una o más impresoras y acepta trabajos de impresión de otros clientes de la red, 
      poniendo en cola los trabajos de impresión.</p>
      Servidor de correo: almacena, envía, recibe, enruta y realiza otras operaciones relacionadas con email para los clientes
      de la red.</p>
      Servidor de fax: almacena, envía, recibe, enruta y realiza otras funciones necesarias para la transmisión, la recepción 
      y la distribución apropiadas de los fax.</p>
      Servidor de la telefonía: realiza funciones relacionadas con la telefonía, como es la de contestador automático, almacenando
       los mensajes de voz, encaminando las llamadas y controlando también la red o el Internet.
      Servidor proxy: realiza un cierto tipo de funciones a nombre de otros clientes en la red para aumentar el funcionamiento 
      de ciertas operaciones (p. ej., prefetching y depositar documentos u otros datos que se soliciten muy frecuentemente),
       también proporciona servicios de seguridad, o sea, incluye un cortafuegos.
      Servidor del acceso remoto (RAS): controla las líneas de módem de los monitores u otros canales de comunicación de la
       red para que las peticiones conecten con la red de una posición remota, responde llamadas telefónicas entrantes y reconoce
        la petición de la red.
      Servidor web: almacena documentos HTML, imágenes, archivos de texto, escrituras, y demás material Web compuesto por datos 
      (conocidos colectivamente como contenido), y distribuye este contenido a clientes que la piden en la red.
      Servidor de base de datos: provee servicios de base de datos a otros programas u otras computadoras, como es definido 
      por el modelo cliente-servidor. También puede hacer referencia a aquellas computadoras (servidores) dedicadas a ejecutar 
      esos programas, prestando el servicio.
      Servidor de Seguridad: Tiene software especializado para detener intrusiones maliciosas, normalmente tienen antivirus, 
      antispyware, antiadware, además de contar con cortafuegos redundantes de diversos niveles y/o capas para evitar ataques,
       los servidores de seguridad varían dependiendo de su utilización e importancia.</p>",
       
      //5
      "<p>Red: Una red es un conjunto de clientes, servidores y base de datos unidos de una manera física o no física en el que
       existen protocolos de transmisión de información establecidos.
      Cliente: El concepto de cliente hace referencia a un demandante de servicios, este cliente puede ser un ordenador como 
      también una aplicación de informática, la cual requiere información proveniente de la red para funcionar.
      Servidor: Un servidor hace referencia a un proveedor de servicios, este servidor a su vez puede ser un ordenador o una 
      aplicación informática la cual envía información a los demás agentes de la red.
      Protocolo: Un protocolo es un conjunto de normas o reglas y pasos establecidos de manera clara y concreta sobre el
       flujo de información en una red estructurada.
      Servicios: Un servicio es un conjunto de información que busca responder las necesidades de un cliente, donde esta 
      información pueden ser mail, música, mensajes simples entre software, videos, etc.
      Base de datos: Son bancos de información ordenada, categorizada y clasificada que forman parte de la red, que son 
      sitios de almacenaje para la utilización de los servidores y también directamente de los clientes.</p>",
      //6      
      "<p>Centralización del control: Los accesos, recursos y la integridad de los datos son controlados por el servidor de 
      forma que un programa cliente defectuoso o no autorizado no pueda dañar el sistema. Esta centralización también facilita
       la tarea de poner al día datos u otros recursos (mejor que en las redes P2P).
      Escalabilidad: Se puede aumentar la capacidad de clientes y servidores por separado. Cualquier elemento puede ser aumentado
       (o mejorado) en cualquier momento, o se pueden añadir nuevos nodos a la red (clientes y/o servidores).
      Fácil mantenimiento: Al estar distribuidas las funciones y responsabilidades entre varios ordenadores independientes, es
       posible reemplazar, reparar, actualizar, o incluso trasladar un servidor, mientras que sus clientes no se verán afectados
        por ese cambio (o se afectarán mínimamente). Esta independencia de los cambios también se conoce como encapsulación.
      Existen tecnologías, suficientemente desarrolladas, diseñadas para el paradigma de C/S que aseguran la seguridad en las 
      transacciones, la amigabilidad del interfaz, y la facilidad de empleo.</p>
      <h2>DESVENTAJAS</h2>
      <p>La congestión del tráfico ha sido siempre un problema en el paradigma de C/S. Cuando una gran cantidad de clientes 
      envían peticiones simultaneas al mismo servidor, puede ser que cause muchos problemas para éste (a mayor número de clientes,
       más problemas para el servidor). Al contrario, en las redes P2P como cada nodo en la red hace también de servidor, cuantos
        más nodos hay, mejor es el ancho de banda que se tiene.
      El paradigma de C/S clásico no tiene la robustez de una redP2P. Cuando un servidor está caído, las peticiones de los 
      clientes no pueden ser satisfechas. En la mayor parte de redes P2P, los recursos están generalmente distribuidos en varios
       nodos de la red. Aunque algunos salgan o abandonen la descarga; otros pueden todavía acabar de descargar consiguiendo 
       datos del resto de los nodos en la red.</p>",

      
      //7
      "<h2>¿Que es la computacion en la nube?</h2>
      <p> La computación en la nube es la entrega de recursos informáticos, incluidos el almacenamiento, la potencia de 
      procesamiento, las bases de datos, las redes, los análisis, la inteligencia artificial y las aplicaciones de software,
       a través de Internet (la nube). </p>
       <img src='../images/u1p2/nube.png' class='img-fluid'>
      <h3>FUNDAMENTOS</h3>
      <p>Cuando una empresa decide migrar a la nube, significa que traslada su infraestructura de TI fuera del entorno 
      local, a un centro de datos mantenido por un proveedor de Cloud Computing (como Oracle). Un proveedor de nube líder de
       la industria tiene la responsabilidad de gestionar la infraestructura de TI del cliente, integrar las aplicaciones y
        desarrollar nuevas capacidades y funcionalidades para seguir el ritmo de las demandas del mercado.</p>
      <h3>TIPOS DE COMPUTOS DE NUBES</h3>
      <p>NUBE PRIVADA</p>
      La nube privada es de uso exclusivo de una organización. Se puede alojar en la ubicación de la organización o en el 
      centro de datos del proveedor de la nube. La nube privada proporciona un nivel más alto de seguridad y control.
      NUBE HIBRIDA
      Como su nombre indica, una nube híbrida es una combinación de nubes públicas y privadas. En general, el cliente 
      aloja sus aplicaciones críticas en sus propios servidores para mayor seguridad y control, y las aplicaciones secundarias 
      se almacenan en el entorno de un proveedor de nube.
      MULTINUBE
      La principal diferencia entre nube híbrida y multinube es el uso de varios dispositivos de Cloud Computing y 
      almacenamiento en una sola arquitectura. Hay que centrarse en añadir algunas palabras clave en el cuerpo.</p>
      <img src='../images/u1p2/nube2.png' class='img-fluid'>",
      
      //8
      "<h2>DEFINICION</h2>
      <p>El mercado ofrece hoy día una gran variedad en cada uno de estos servicios, facilitando a los usuarios la búsqueda de 
      cúal es el más apropiado para sus necesidades. Grandes empresas de la informática como Microsoft, Amazon o Google no son 
      ajenas a este hecho y ofrecen algunos de los mejores servicios IaaS, PaaS y SaaS.</p>
      <h3>QUE ES IAAS</h3>
      <p>Cuando nos referimos a IaaS, estamos hablando de infraestructuras como servicio. Las empresas contratan la infraestructura
       de hardware a un tercero a cambio de una cuota o alquiler. La contratación de este hardware permite elegir la capacidad de
        proceso (procesadores), la memoria a utilizar (memoria RAM) y el espacio de almacenamiento (disco duro).</p>
      <h4>QUE ES PAAS</h4>
      <p>El servicio PaaS ofrece plataformas como servicios. En estas plataformas se pueden lanzar aplicaciones como bases de 
      datos, middleware, herramientas de desarrollo, servicios de inteligencia empresarial, etc.
Este tipo de servicios es el ideal para los desarrolladores que sólo quieran centrarse en la implementación y administración de
 sus aplicaciones. Al no tener que preocuparse por los recursos de hardware y software (sistemas operativo), mejoran su eficacia,
  centrándose sólo en la parte que les interesa.</p>
      <h5>QUE ES SAAS</h5>
      <p>Este modelo de software como infraestructura, aloja el software de la empresa, así como sus datos, en servidores 
      externos a la misma, y paga una cuota por su utilización. Cualquier empleado de una empresa podrá acceder desde cualquier
       lugara las aplicaciones de la empresa sin necesidad de instalarlas en un equipo local. Cuando hablamos de software en la 
       nube estamos hablando de SaaS.
Con un SaaS la preocupación de la empresa será sólo cómo utilizar los programas de software necesarios para su funcionamiento, 
olvidándose del resto de recursos. El hardware requerido, sistemas operativos, aplicaciones, etc. son provistas por el proveedor 
del servicio que, además, se encarga de mantenerlas funcionando correctamente y actualizadas.</p>",
//9
"<h2>Qué es IaaS</h2>

<p>IaaS ofrece también servicios de virtualización como máquinas virtuales, cortafuegos, sistemas de backups o balanceadores
 de carga.</p>

<p>IaaS es la base del servicio y contiene los bloques fundamentales para la TI en la nube, pues proporciona los servicios 
y estructuras necesarios sobre los cuales se construyen los otros servicios.</p>

<h2>Qué es PaaS</h2>
<p>El servicio PaaS ofrece plataformas como servicios. En estas plataformas se pueden lanzar aplicaciones como bases de datos,
 middleware, herramientas de desarrollo, servicios de inteligencia empresarial, etc.</p>

<h2>Qué es SaaS</h2>
<p>Este modelo de software como infraestructura, aloja el software de la empresa, así como sus datos, en servidores
 externos a la misma, y paga una cuota por su utilización. Cualquier empleado de una empresa podrá acceder desde cualquier lugara
  las aplicaciones de la empresa sin necesidad de instalarlas en un equipo local. Cuando hablamos de software en la nube estamos 
  hablando de SaaS.</p>",

    ];

    $temasu2 = [ 'Unidad 2 Reconocer los conceptos de presentación distribuida presentación remota lógica o proceso distribuido',
     'acceso a datos remotos y bases de datos distribuidas.',
'Definir los conceptos de lógica de acceso, presentación y negocio a datos.',
'Explicar el proceso de diseño de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de 
aplicación.',
'Explicar el proceso de desarrollo de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica 
de aplicación.',
'Explicar el proceso de planificación en dos niveles.',
'Explicar el proceso de planificación en tres niveles',
'Explicar el proceso de planificación multiniveles.',
'Identificar problemas de actualización y mantenimiento de aplicaciones multinivel.',
'Reconocer los conceptos de modelo, control y vista, en las arquitecturas Cliente/Servidor.',
 'Reconocer el concepto del Modelo Vista Controlador (MVC) en las arquitecturas Cliente/Servidor',
'Explicar el proceso de flujo de control a partir del MVC, en las arquitecturas Cliente/Servidor.',
'Describir el desarrollo de software a partir del MVC, en las arquitecturas Cliente/Servidor.',
'Definir el concepto de comunicación orientada a conexión e interfaz de programación de aplicaciones (API).',
'Explicar el proceso de comunicación y configuración orientada a conexión e interfaz de programación de aplicaciones (API).',
'Definir el concepto de sockets.',
'Explicar el proceso del uso de sockets en aplicaciones Cliente/Servidor.'];


    $tituloeditu2 = [
        //primer titulo del tema
        "<h1>Unidad 2: Reconocer los conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas.</h1>
        <ul><li>Unidad 2</li></ul>",
        //Segundo titulo del tema
        "<h1>Unidad 2: Definir los conceptos de lógica de acceso, presentación y negocio a datos.</h1>
        <ul><li>Unidad 2</li></ul>",
        //tercer titulo del tema
        "<h1>Unidad 2: Explicar el proceso de diseño de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación.</h1>
        <ul><li>Unidad 2</li></ul>",
        //cuerto titulo del tema
        "<h1>Unidad 2: Explicar el proceso de desarrollo de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación</h1>
        <ul><li>Unidad 2</li></ul>",

        //sexto titulo del tema
        "<h1>Unidad 2: Explicar el proceso de planificación en dos niveles.</h1>
        <ul><li>Unidad 2</li></ul>",
        //septimo titulo del tema
        "<h1>Unidad 2: Explicar el proceso de planificación en tres niveles</h1>
        <ul><li>Unidad 2</li></ul>",
        //octavo titulo del tema
        "<h1>Unidad 2: Explicar el proceso de planificación multiniveles.</h1>
        <ul><li>Unidad 2</li></ul>",
        //noveno titulo del tema
        "<h1>Unidad 2: Identificar problemas de actualización y mantenimiento de aplicaciones multinivel.</h1>
        <ul><li>Unidad 2</li></ul>",
        //decimo titulo del tema
        "<h1>Unidad 2: Reconocer los conceptos de modelo, control y vista, en las arquitecturas Cliente/Servidor.</h1>
        <ul><li>Unidad 2</li></ul>",
        //onceavo titulo del tema
        "<h1>Unidad 2: Reconocer el concepto del Modelo Vista Controlador (MVC) en las arquitecturas Cliente/Servidor.</h1>
        <ul><li>Unidad 2</li></ul>",
        //doceavo titulo del tema
        "<h1>Unidad 2: Explicar el proceso de flujo de control a partir del MVC, en las arquitecturas Cliente/Servidor.</h1>
        <ul><li>Unidad 2</li></ul>",
        //treceavo titulo del tema
        "<h1>Unidad 2: Describir el desarrollo de software a partir del MVC, en las arquitecturas Cliente/Servidor</h1>
        <ul><li>Unidad 2</li></ul>",
        //catorceavo titulo del tema
        "<h1>Unidad 2:Definir el concepto de comunicación orientada a conexión e interfaz de programación de aplicaciones (API).</h1>
        <ul><li>Unidad 2</li></ul>",
        //quinceavo titulo del tema
        "<h1>Unidad 2: Explicar el proceso de comunicación y configuración orientada a conexión e interfaz de programación de aplicaciones (API).</h1>
        <ul><li>Unidad 2</li></ul>",
        //dieciseisavo titulo del tema
        "<h1>Unidad 2: Definir el concepto de sockets.</h1>
        <ul><li>Unidad 2</li></ul>",
        //dieciseptavo titulo del tema
        "<h1>Unidad 2: Explicar el proceso del uso de sockets en aplicaciones Cliente/Servidor.</h1>
        <ul><li>Unidad 2</li></ul>",
    ];

    $contenido2 = [
        //1
        "<h2><b>Presentacion distribuida</b></h2>
        <p>La capa de presentación se encuentra distribuida entre el cliente y el servidor, de manera que en el cliente se 
        modifica o adapta la presentación que ofrece el servidor. Este tipo de sistemas tienen un difícil mantenimiento.</p>
        <img src='../images/u1p2/tipoServidor.png' class='img-fluid'>
        <h2><b>Presentacion remota</b></h2>
        <p>La capa de presentación de datos, se ejecuta en el cliente totalmente. En ella se realizan las validaciones de los 
        datos de entrada, el formateo de los de salida, etc. La lógica de negocio y el acceso a la base de datos se aloja en el 
        servidor.</p>
        <img src='../images/u2/remota.png' class='img-fluid'>
        <h2><b>Logica o proceso distribuido</b></h2>
        <p>En este modelo, la capa que implementa la lógica de negocio se encuentra dividida entre el cliente y el servidor. 
        El acceso a la base de datos se encuentra en el servidor y la capa de presentación en el cliente.</p>
        <img src='../images/u2/proceso.png' class='img-fluid'>
        <h2><b>Base de datos remota</b></h2>
        <p>Las capas de negocio y de presentación se ejecutan completamente en el cliente, mientras que la base de datos está 
        completamente en el servidor.</p>
        <img src='../images/u2/base.png' class='img-fluid'>
        <h2><b>Base de datos distribuida</b></h2>
        <p>Las capas de negocio y de presentación se ejecutan completamente en el cliente, mientras que la base de datos está
         distribuida entre el cliente y el servidor. Se requieren de mecanismos para asegurar la coherencia en los datos.</p>",

        //2
        "<h2>Logica de datos</h2>
        <p>En este conjunto entran los procesos encargados de la gestión de los datos propiamente dicha,
          es decir, los procesos encargados del mantenimiento de los datos, de garantizar las reglas de
          integridad referencial establecidas, así como de la gestión de las transacciones. Estas tareas
          son realizadas, generalmente, por un Sistema de Gestión de Bases de Datos Relacionales,
          como SQL Server, Oracle, MySQL, Informix, etc.</p>
          <h3>Logica de negocio</h3>
          <p>Es la lógica de la aplicación que controla la secuencia de acciones y fuerza el cumplimiento de
          las reglas del negocio propias de cada empresa además, asegura la integridad de las
          transacciones de las operaciones necesarias que haya que realizar para que se cumplan
          dichas reglas. La lógica del negocio también transforma una serie de datos en información útil
          para el usuario mediante la aplicación de las reglas apropiadas.</p>
          <h3>Logica de presentacion</h3>
          <p>Esta lógica es la responsable del control de todos los aspectos relacionados con la interacción
          entre el usuario y la aplicación. Para llevar a cabo esta tarea de control, es necesario conocer
          qué tipos de usuarios utilizarán la aplicación, qué actividades tienen que realizar y, teniendo en
          cuenta estos datos, cuáles son los mejores estilos de interfaz para que esos usuarios realicen
          sus tareas. En esta lógica se engloban todas las tareas que deben ser realizadas por la parte
          Cliente del modelo general.</p>",

        //3
        "<p>Los requisitos que debe cumplir un sistema de información y la complejidad de la información que se presenta en él
         provocan que el diseño de una base de datos sea un proceso complicado.</p>
 Para simplificar este proceso, es muy recomendable utilizar la estrategia de “divide y vencerás” (divide and conquer).
Si aplicamos este concepto, obtenemos las diferentes etapas del diseño de bases de datos. <p>Estas etapas son secuenciales y 
el resultado de cada una sirve de punto de partida de la etapa siguiente. El resultado de la última etapa será el diseño final de
 nuestra base de datos.
<p>Hasta esta etapa del diseño de bases de datos todavía no ha sido necesario elegir el tipo de bases de datos que se utilizará 
(relacional, orientada a objetos, documental, etc.) ni el sistema gestor de bases de datos (SGBD (1) ) que se utilizará o el 
lenguaje concreto con el que se implementará la base de datos.
En el momento en el que se inicia la tercera etapa del proceso de diseño, el diseño lógico, hay que determinar el tipo de 
bases de datos que se utilizará. Es decir, no es necesario todavía escoger un SGBD concreto, pero sí el tipo de bases de datos
 que se quiere utilizar.
 En esta etapa el esquema conceptual se convierte en un esquema lógico adecuado al tipo de bases de datos que se pretende 
usar.</p>
<h2>Ventajas del diseño de base de datos</h2>
<p>Un diseño de base de datos realizado de forma correcta nos proporciona una ventajas fundamentales:
•Nos permite ahorrar espacio, mediante el diseño de base de datos optimizadas y sin datos duplicados.
•Nos ayuda a que se preserve la precisión e integridad de los datos y que no se pierda información.
•Agiliza de forma extrema el acceso y el procesamiento de los datos.
•Diseño de base de datos: fases principales
•Como cada proceso, el diseño de base de datos está compuestos por distintas etapas secuenciales.</p>",

        //4
        "<h2>LOGICA DE ACCESO DE DATOS</h2>
<p>La capa de acceso a datos (DAL) creada en el primer tutorial separa limpiamente la lógica de acceso a datos de la lógica de 
presentación.
 Sin embargo, aunque dal separa limpiamente los detalles de acceso a datos de la capa de presentación, no aplica ninguna 
regla de negocios que se pueda aplicar. Por ejemplo, CategoryID SupplierID Products Discontinued para nuestra aplicación, es 
posible que deseemos no permitir que se modifiquen los campos o de la tabla cuando el campo está establecido en 1, o es posible
 que deseemos aplicar reglas de antigüedad, lo que prohíbe situaciones en las que un empleado está administrado por alguien que 
 fue contratado después de él.</p>
<h3>Descripción de capas lógicas</h3>
<p>Esta sección proporciona breves descripciones de las cuatro capas lógicas que se muestran en la Figura 2 4.
Las descripciones hacen referencia a los componentes de la aplicación implementados utilizando el modelo de componente de 
plataforma de J2EE.
No obstante, otros modelos de componente distribuidos, como CORBA, también son compatibles con esta arquitectura.</p>

<p>Capa de cliente. La capa de cliente está formada por la lógica de la aplicación a la que el usuario final accede directamente
 mediante una interfaz de usuario.

<p>Capa de presentación. La capa de presentación está formada por la lógica de aplicación, que prepara datos para su envío a la
 capa de cliente y procesa solicitudes desde la capa de cliente para su envío a la lógica de negocios del servidor.
La lógica en la capa de presentación está formada normalmente por componentes de J2EE como, por ejemplo, Java Servlet o los
 componentes de JSP que preparan los datos para enviarlos en formato HTML o XML, o que reciben solicitudes para procesarlas.

Capa de servicios de negocios. La capa de servicios de negocio consiste en la lógica que realiza las funciones principales de 
la aplicación: procesamiento de datos, implementación de funciones de negocios, coordinación de varios usuarios y administración 
de recursos externos como, por ejemplo, bases de datos o sistemas heredados.</p>",

        //6
      "<h2><b>Concepto</b></h2>
      <p>En la planificacion de dos niveles se carga en la memoria principal cierto subconjunto de los proceso ejecutables.</p>
      <p>El planificador se restringe entonces a ese subconjunto durante cierto tiempo.</p>
      <p>Se eliminan de la memoria los procesos que hayan permanecido en ella lo suficiente y manda a cargar a memoria los proceso que hayan estado en disco demasiado tiempo.</p>
      <img src='../images/demo/arqui.png' class='img-fluid'>
      <h2><b>Esquema operativo de un planificador de dos niveles</b></h2>
      <p>1.-Se carga en la memoria principal cierto subconjunto de los procesos ejecutables.</p>
      <p>2.-El planificador se restringe a ellos durante cierto tiempo.</p>
      <p>3.-Periódicamente se llama a un planificador de nivel superior para efectuar las siguientes tareas:</p>
                    <p>Eliminar de la memoria los procesos que hayan permanecido en ella el tiempo suficiente.</p>
                    <p>Cargar a memoria los procesos que hayan estado en disco demasiado tiempo.</p>
        <p>4.-El planificador de nivel inferior se restringe de nuevo a los procesos ejecutables que se encuentren en la memoria.</p>
      <p>5.-El planificador de nivel superior se encarga de desplazar los procesos de memoria a disco y viceversa.</p>",

      //7
      "<h2><b>Planificación a largo plazo o estratégica</b></h2>
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
        <img src='../images/demo/arqui.png' class='img-fluid'>",
        
        //8
        "<p>Al hablar del desarrollo de aplicaciones Web resulta adecuado presentarlas dentro de las aplicaciones multinivel. Los sistemas típicos cliente/servidor pertenecen a la categoría de las aplicaciones de dos niveles. La aplicación reside en el cliente mientras que la base de datos se encuentra en el servidor. En este tipo de aplicaciones el peso del cálculo recae en el cliente, mientras que el servidor hace la parte menos pesada, y eso que los clientes suelen ser máquinas menos potentes que los servidores. Además, está el problema de la actualización y el mantenimiento de las aplicaciones, ya que las modificaciones a la misma han de ser trasladada a todos los clientes.</p>

        <p>Para solucionar estos problemas se ha desarrollado el concepto de arquitecturas de tres niveles: interfaz de presentación, lógica de la aplicación y los datos.</p>
        
        <p>La capa intermedia es el código que el usuario invoca para recuperar los datos deseados. La capa de presentación recibe los datos y los formatea para mostrarlos adecuadamente. Esta división entre la capa de presentación y la de la lógica permite una gran flexibilidad a la hora de construir aplicaciones, ya que se pueden tener múltiples interfaces sin cambiar la lógica de la aplicación.</p>
        
        <p>La tercera capa consiste en los datos que gestiona la aplicación. Estos datos pueden ser cualquier fuente de información como una base de datos o documentos XML.</p>
        
        <p>La arquitectura de las aplicaciones Web suelen presentar un esquema de tres niveles El primer nivel consiste en la capa de presentación que incluye no sólo el navegador, sino también el servidor web que es el responsable de dar a los datos un formato adecuado. El segundo nivel está referido habitualmente a algún tipo de programa o script. Finalmente, el tercer nivel proporciona al segundo los datos necesarios para su ejecución.</p>
        
        <p>Una aplicación Web típica recogerá datos del usuario (primer nivel), los enviará al servidor, que ejecutará un programa (segundo y tercer nivel) y cuyo resultado será formateado y presentado al usuario en el navegador (primer nivel otra vez).</p>",

        //9
        "<p>En la ingeniería de software, el mantenimiento de software es la modificación de un producto de software después de la entrega, para corregir errores, mejorar el rendimiento u otros atributos. El mantenimiento de software es una de las actividades más comunes en la ingeniería de software.</p>

<p>El mantenimiento del software es también una de las fases del ciclo de vida del desarrollo del sistema (SDLC), que se aplica al desarrollo de software. La fase de mantenimiento es la fase que sigue al despliegue (implementación) del software en el campo.</p>

<p>Una percepción común del mantenimiento es que se trata simplemente de la corrección de defectos. Sin embargo, un estudio indicó que la mayoría, más del 80%, del esfuerzo de mantenimiento se utiliza para acciones no correctivas (Pigosky 1997). Esta percepción se perpetúa cuando los usuarios envían informes de problemas que en realidad son mejoras en la funcionalidad del sistema[cita requerida].</p>

<p>El mantenimiento del software y la evolución de los sistemas fue abordado por primera vez por Meir M. Lehman en 1969. Durante un período de veinte años, su investigación condujo a la formulación de las leyes de Lehman (Lehman 1997). Las principales conclusiones de su investigación incluyen que el mantenimiento es realmente un desarrollo evolutivo y que las decisiones de mantenimiento son ayudadas por la comprensión de lo que sucede con los sistemas (y el software) a lo largo del tiempo. Lehman demostró que los sistemas siguen evolucionando con el tiempo. A medida que evolucionan, se vuelven más complejos a menos que se tomen algunas medidas como la refactorización del código para reducir la complejidad.</p>",

        //10
        "<h2>Concepto modelo cliente servidor</h2>
<p>La arquitectura cliente-servidor es un modelo de aplicación distribuida en el que las tareas se reparten entre los proveedores de recursos o servicios, llamados servidores, y los demandantes, llamados clientes. Un cliente realiza peticiones a otro programa, el servidor, quien le da respuesta. Esta idea también se puede aplicar a programas que se ejecutan sobre una sola computadora, aunque es más ventajosa en un sistema operativo multiusuario distribuido a través de una red de computadoras.</p>

•	<p>El Modelo que contiene una representación de los datos que maneja el sistema, su lógica de negocio, y sus mecanismos de persistencia.</p>
<p>El modelo es el responsable de:</p>
•	<p>Acceder a la capa de almacenamiento de datos. Lo ideal es que el modelo sea independiente del sistema de almacenamiento.
•	Define las reglas de negocio (la funcionalidad del sistema). Un ejemplo de regla puede ser: Si la mercancía pedida no está en el almacén, consultar el tiempo de entrega estándar del proveedor.
•	Lleva un registro de las vistas y controladores del sistema.
•	Si estamos ante un modelo activo, notificará a las vistas los cambios que en los datos pueda producir un agente externo (por ejemplo, un fichero por lotes  que actualiza los datos, un temporizador que desencadena una inserción, etc.).</p>

•	
•	<p>La Vista, o interfaz de usuario, que compone la información que se envía al cliente y los mecanismos interacción con éste.</p>
<p>Las vistas son responsables de:
•	Recibir datos del modelo y los muestra al usuario.
•	Tienen un registro de su controlador asociado (normalmente porque además lo instancia).
•	Pueden dar el servicio de Actualización(), para que sea invocado por el controlador o por el modelo (cuando es un modelo activo que informa de los cambios en los datos producidos por otros agentes).</p>


•	<p>El Controlador, que actúa como intermediario entre el Modelo y la Vista, gestionando el flujo de información entre ellos y las transformaciones para adaptar los datos a las necesidades de cada uno.
El controlador es responsable de:
•	 Recibe los eventos de entrada (un clic, un cambio en un campo de texto, etc.).
•	Contiene reglas de gestión de eventos, del tipo SI Evento Z, entonces Acción W. Estas acciones pueden suponer peticiones al modelo o a las vistas. Una de estas peticiones a las vistas puede ser una llamada al método Actualizar(). Una petición al modelo puede ser Obtener_tiempo_de_entrega ( nueva_orden_de_venta ). </p>",

        //11
        "<p>Modelo-vista-controlador (MVC) es un patrón de arquitectura de software, que separa los datos y principalmente lo 
        que es la lógica de negocio de una aplicación de su representación y el módulo encargado de gestionar los eventos y las 
        comunicaciones. Para ello MVC propone la construcción de tres componentes distintos que son el modelo, la vista y el
         controlador, es decir, por un lado define componentes para la representación de la información, y por otro lado para 
         la interacción del usuario.12 Este patrón de arquitectura de software se basa en las ideas de reutilización de código y 
         la separación de conceptos, características que buscan facilitar la tarea de desarrollo de aplicaciones y su posterior
          mantenimiento.</p>",
        //12
       " 1.	<p>El usuario interactúa con la interfaz de usuario de alguna forma (por ejemplo, el usuario pulsa un botón, enlace,
        etc.)
2.	El controlador recibe (por parte de los objetos de la interfaz-vista) la notificación de la acción solicitada por el usuario.
 El controlador gestiona el evento que llega, frecuentemente a través de un gestor de eventos (handler) o callback.
3.	El controlador accede al modelo, actualizándolo, posiblemente modificándolo de forma adecuada a la acción solicitada por
 el usuario (por ejemplo, el controlador actualiza el carro de la compra del usuario). Los controladores complejos están a menudo
  estructurados usando un patrón de comando que encapsula las acciones y simplifica su extensión.
4.	El controlador delega a los objetos de la vista la tarea de desplegar la interfaz de usuario. La vista obtiene sus datos 
del modelo para generar la interfaz apropiada para el usuario donde se refleja los cambios en el modelo (por ejemplo, 
produce un listado del contenido del carro de la compra). El modelo no debe tener conocimiento directo sobre la vista.
 Sin embargo, se podría utilizar el patrón Observador para proveer cierta indirección entre el modelo y la vista, permitiendo 
 al modelo notificar a los interesados de cualquier cambio. Un objeto vista puede registrarse con el modelo y esperar a los
  cambios, pero aun así el modelo en sí mismo sigue sin saber nada de la vista. El controlador no pasa objetos de dominio
   (el modelo) a la vista aunque puede dar la orden a la vista para que se actualice. Nota: En algunas implementaciones la vista
    no tiene acceso directo al modelo, dejando que el controlador envíe los datos del modelo a la vista.
5.	La interfaz de usuario espera nuevas interacciones del usuario, comenzando el ciclo nuevamente.</p>",
        //13
       " <p>1. Crear modelo
Primeramente, se hará la creación del modelo, el cual se llamará “Intern” y nos ayudará a describir las características propias
 del objeto.

2. Crear vista
Se creará la vista para mostrar los resultados del ejemplo, en este caso, se utilizará imprimir en consola.
3. Crear controlador
Para tener una ejecución de los eventos correctamente, se creará el controlador y será el intermediario entre el modelo y la vista.
4. Crear clase principal
Finalmente, se necesitará crear una clase principal para utilizar los métodos del controlador y demostrar el uso del patrón de diseño MVC.
5. Verificar resultado
Para verificar que el ejemplo funcione correctamente es necesario verificar el resultado que nos da la consola, y como se muestra,
 el resultado es correcto.</p>",

        //14
        "<h2>Comunicación orientada a conexicion</h2>
<p>Un protocolo orientado a la conexión es un modo de comunicación de redes donde se debe establecer una conexión antes de 
transferir datos. Se identifica el flujo de tráfico con un identificador de conexión en lugar de utilizar explícitamente las 
direcciones de la fuente y el destino.
Se dice que un servicio de comunicación entre dos entidades es orientado a conexión cuando antes de iniciar la comunicación se 
verifican determinados datos (disponibilidad, alcance, etc.) entre estas entidades y se negocian unas credenciales para hacer
 esta conexión más segura y eficiente. Este tipo de conexiones suponen mayor carga de trabajo a una red (y tal vez retardo) pero 
 aportan la eficiencia y fiabilidad necesaria a las comunicaciones que la requieran.</p>
<h2>API</h2>
<p>Se trata de un conjunto de definiciones y protocolos que se utiliza para desarrollar e integrar el software de las
aplicaciones, permitiendo la comunicación entre dos aplicaciones de software a través de un conjunto de reglas.
Así pues, podemos hablar de una API como una especificación formal que establece cómo un módulo de un software se comunica
 o interactúa con otro para cumplir una o muchas funciones. Todo dependiendo de las aplicaciones que las vayan a utilizar,
  y de los permisos que les dé el propietario de la API a los desarrolladores de terceros.</p>",

        //15
        "<p>API son las siglas en inglés de Application Programming Interface, que se puede traducir como interfaz de programación de aplicaciones. Como su nombre implica, una API permite a programadores externos acceder a determinadas funciones. Las interfaces actúan como punto de acceso para otros programas. A través de una API, los dos programas pueden comunicarse entre sí, intercambiar datos y transferir comandos. Esto funciona tanto para el software de escritorio como para las aplicaciones móviles o las aplicaciones web. También se puede estructurar un solo programa de tal manera que los diferentes módulos se comuniquen entre sí a través de interfaces.
Interfaz de Programación de Aplicaciones, es decir, interfaz de comunicación entre componentes software. Método que utiliza un programa para interactuar con funciones del sistema operativo.

Es una “llave de acceso” a funciones que nos permiten hacer uso de un servicio web provisto por un tercero, dentro de una aplicación web propia, de manera segura.
Al igual que una interfaz de usuario permite la comunicación entre los humanos y las máquinas, una API permite la comunicación entre diferentes aplicaciones de software. Las interfaces de programación de aplicaciones permiten transferir los datos de forma ordenada. De esta forma se pueden transferir datos incluso con aplicaciones escritas en diferentes lenguajes de programación.</p>",

        //16
        "<h2>Que es un socket</h2>
<p>Un socket (enchufe), es un método para la comunicación entre un programa del cliente y un programa del servidor en una red.
 Un socket se define como el punto final en una conexión. Los sockets se crean y se utilizan con un sistema de peticiones o de
  llamadas de función a veces llamados interfaz de programación de aplicación de sockets (API, application programming interface).
  </p>",
        //17
        "<p>Los sockets en Java o cualquier otro lenguaje de programación sirven para interconectar dos sistemas a través de la 
        red, sólo utilizando un número ip o nombre de host y un puerto determinado. La arquitectura utilizada en los sockets es 
        la de Cliente/Servidor.

Con el uso de sockets en Java se pueden desarrollar muchos sistemas, como por ejemplos chats, videos juegos online y multijugador o incluso una simple página web.

En este artículo vamos a entender cómo utilizar sockets en Java con un ejemplo sencillo donde un cliente se conecta a un servidor 
para enviarle un mensaje y recibir una respuesta.
Los sockets son un mecanismo que nos permite establecer un enlace entre dos programas que se ejecutan independientes el uno del
 otro (generalmente un programa cliente y un programa servidor) Java por medio de la librería java.net nos provee dos clases:
  Socket para implementar la conexión desde el lado del cliente y ServerSocket que nos permitirá manipular la conexión desde el
   lado del servidor.</p>
<p>Antes de comenzar a ver código (que es lo que todos queremos) explicaré cómo será el funcionamiento de nuestra aplicación 
cliente servidor usando sockets en Java, cabe resaltar que tanto el cliente como el servidor no necesariamente deben estar 
implementados en Java, solo deben conocer sus direcciones IP y el puerto por el cual se comunicarán. Para nuestro ejemplo de
 sockets implementaremos ambos (cliente y servidor) usando Java y se comunicarán usando el puerto 1234 (es bueno elegir los 
 puertos en el rango de 1024 hasta 65535). La dinámica del ejercicio será como se ve:

El servidor estará a la espera de una conexión, en cuanto el cliente inicie enviará un mensaje de petición al servidor,
 éste le responderá afirmativamente y una vez recibida la confirmación, el cliente enviará un par de mensajes y la conexión 
 finalizará.</p>",
    ];

    //insertar publicaciones
    for($i =0;$i<9;$i++)
    {
        DB::table('publicaciones')->insert([
            'nombre' =>$temasu1[$i],
        'titular' =>$tituloeditu1[$i],
        'contenido' =>$contenidoedit[$i]
        ]);
    }
    for($j =0;$j<16;$j++)
    {
        DB::table('publicaciones')->insert([
            'nombre' =>$temasu2[$j],
        'titular' =>$tituloeditu2[$j],
        'contenido' =>$contenido2[$j]
        ]);
    }
}
}
