@extends('Template.layout')
@section('titulo')
<h6 class="heading">PRIMER PARCIAL</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Apuntes</a></li>
      <li><a href="#">Parcial 1</a></li>
      <li><a href="#">Protocolo de comunicacion en redes</a></li>
    </ul>
@endsection

@section('contenido')
<div class="content"> 
      <!-- ################################################################################################ -->
      <h1>Protocolos de comunicacion en redes</h1>
      <h2>Definicion</h2>
      <img class="imgr borderedbox inspace-5" src="../images/demo/red2.png" alt="">
      <p>Un protocolo es un conjunto de reglas: los protocolos de red son estándares y políticas formales, conformados por restricciones, procedimientos y formatos que definen el intercambio de paquetes de información para lograr la comunicación entre dos servidores o más dispositivos a través de una red.</p>
      <p>Los protocolos de red incluyen mecanismos para que los dispositivos se identifiquen y establezcan conexiones entre sí, así como reglas de formato que especifican cómo se forman los paquetes y los datos en los mensajes enviados y recibidos. Algunos protocolos admiten el reconocimiento de mensajes y la compresión de datos diseñados para una comunicación de red confiable de alto rendimiento.</p>
      <h3>Tipos de protocolos de red</h3>
      <img class="imgl borderedbox inspace-5" src="../images/demo/red.png" alt="">
      <p>Los protocolos para la transmisión de datos en internet más importantes son TCP (Protocolo de Control de Transmisión) e IP (Protocolo de Internet). De manera conjunta (TCP/IP) podemos enlazar los dispositivos que acceden a la red, algunos otros protocolos de comunicación asociados a internet son POP, SMTP y HTTP.</p>
      <p>Existen varios tipos de protocolos de red:</p>
      <p>➢Protocolos de comunicación de red: protocolos de comunicación de paquetes básicos como TCP / IP y HTTP.</p>
      <p>➢Protocolos de seguridad de red: implementan la seguridad en las comunicaciones de red entre servidores, incluye HTTPS, SSL y SFTP.</p>
      <p>➢Protocolos de gestión de red: proporcionan mantenimiento y gobierno de red, incluyen SNMP e ICMP.</p>
      
      <h3>A continuación listamos algunos de los protocolos de red más conocidos, según las capas del modelo OSI: </h3>
      <p>Protocolos de la capa 1 - Capa física</p>
      <p>➢USB: Universal Serial Bus</p>
      <p>➢Ethernet: Ethernet physical layer</p>
      <p>➢DSL: Digital subscriber line</p>
      <p>Protocolos de la capa 2 - Enlace de datos</p>
      <p>➢DCAP: Protocolo de acceso del cliente de la conmutación de la transmisión de datos</p>
      <p>➢FDDI: Interfaz de distribución de datos en fibra</p>
      <p>➢HDLC: Control de enlace de datos de alto nivel</p>
      <p>Protocolos de la capa 3 - Red</p>
      <p>➢ARP: Protocolo de resolución de direcciones</p>
      <p>➢BGP: Protocolo de frontera de entrada</p>
      <p>➢IPv4: Protocolo de internet versión 4</p>
      <p>Protocolos de la capa 4 - Transporte</p>
      <p>➢IL: Convertido originalmente como capa de transporte para 9P</p>
      <p>➢SPX: Intercambio ordenado del paquete</p>
      <p>➢SCTP: Protocolo de la transmisión del control de la corriente</p>
      <p>Protocolos de la capa 5 - Sesión</p>
      <p>➢NFS: Red de sistema de archivos</p>
      <p>➢SMB: Bloque del mensaje del servidor</p>
      <p>➢RPC: Llamada a procedimiento remoto</p>
      <p>Protocolos de la capa 6- Presentación</p>
      <p>➢TLS: Seguridad de la capa de transporte</p>
      <p>➢SSL: Capa de conexión segura</p>
      <p>➢XDR: Extenal data representation</p>
      <p>Protocolos de la capa 7 - Aplicación</p>
      <p>➢DHCP: Protocolo de configuración dinámica de host</p>
      <p>➢DNS: Domain Name System</p>
      <p>➢HTTP: Protocolo de transferencia de hipertexto</p>
      <!-- ################################################################################################ -->
    </div>
@endsection